<?php
 
 
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<?php
 
global $USER;
if (!$USER->IsAdmin()) {
    echo "�������� ��� �����������...";
    return;
}
$time_start = microtime(true);
echo '<br>';
///////////////////////////////////////////////////////////////////
 
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
 
$deleteFiles = 'yes'; //������� �� �������� ����� yes/no
$saveBackup = 'no'; //������� ����� ����� yes/no
//����� ��� ������
$patchBackup = $_SERVER['DOCUMENT_ROOT'] . "/upload/zixnru_Backup/";
//������� ����� ��� ������ ������
$rootDirPath = $_SERVER['DOCUMENT_ROOT'] . "/upload/iblock";
//�������� ����� ��� ������
if (!file_exists($patchBackup)) {
    CheckDirPath($patchBackup);
}
 
// �������� ������ �� ������� b_file
$arFilesCache = array();
$result = $DB->Query('SELECT FILE_NAME, SUBDIR FROM b_file WHERE MODULE_ID = "iblock"');
while ($row = $result->Fetch()) {
    $arFilesCache[$row['FILE_NAME']] = $row['SUBDIR'];
}
 
 
$hRootDir = opendir($rootDirPath);
$count = 0;
$contDir = 0;
$countFile = 0;
$i = 1;
$removeFile=0;
while (false !== ($subDirName = readdir($hRootDir))) {
    if ($subDirName == '.' || $subDirName == '..') {
        continue;
    }
    //������� ��������� ������
    $filesCount = 0;
    $subDirPath = "$rootDirPath/$subDirName"; //���� �� ������������ � �������
    $hSubDir = opendir($subDirPath);
    
    while (false !== ($fileName = readdir($hSubDir))) {
        if ($fileName == '.' || $fileName == '..') {
            continue;
        }
        $countFile++;
 
        if (array_key_exists($fileName, $arFilesCache)) { //���� � ����� ���� � ������ ������ ���� - �������
            $filesCount++;
            continue;
        }
        $fullPath = "$subDirPath/$fileName"; // ������ ���� �� �����
        $backTrue = false; //��� �������� ������
        if ($deleteFiles === 'yes') {
            if (!file_exists($patchBackup . $subDirName)) {
                if (CheckDirPath($patchBackup . $subDirName . '/')) { //������ �������������
                    $backTrue = true;
                }
            } else {
                $backTrue = true;
            }
            if ($backTrue) {
                if ($saveBackup === 'yes') {
                    CopyDirFiles($fullPath, $patchBackup . $subDirName . '/' . $fileName); //����� � �����
                }
            }
            //�������� �����
            if (unlink($fullPath)) {
                $removeFile++;
                echo "������: " . $fullPath . '<br>';
            }
        } else {
            $filesCount++;
            echo '�������� �� �������� - ' . $i . ') ' . $fullPath . '<br>';
        }
        $i++;
        $count++;
        unset($fileName, $backTrue);
    }
    closedir($hSubDir);
    //������� �������������, ���� �������� ������� � ������� ������ ������ - �.� ������� ����
    if ($deleteFiles && !$filesCount) {
        rmdir($subDirPath);
    }
    $contDir++;
}
if ($count < 1) {
    echo '�� ����� ������ ��� ��������<br>';
}
 if ($saveBackup === 'yes') {
     echo '����� ������ �������� �: <strong>' . $patchBackup . '</strong><br>';
 }
echo '����� ������ ������: <strong>' . $removeFile . '</strong><br>';
echo '����� ������ � ' . $rootDirPath . ': <strong>' . $countFile . '</strong><br>';
echo '����� ������������ � ' . $rootDirPath . ': <strong>' . $contDir . '</strong><br>';
echo '����� ������� � b_file: <strong>' . count($arFilesCache) . '</strong><br>';
closedir($hRootDir);
 
 
////////////////////////////////////////////////////////////////////
echo '<br>';
$time_end = microtime(true);
$time = $time_end - $time_start;
 
echo "����� ���������� $time ������\n";
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>