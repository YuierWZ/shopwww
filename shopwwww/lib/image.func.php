<?php
//ͨ��GD������֤��
//��������
$width=80;
$height=20;
$image=imagecreatetruecolor($width, $height);
$white=imagecolorallocate($image, 255, 255, 255);
$black=imagecolorallocate($image, 0, 0, 0);
//����������仭��
imagefilledrectangle($image, 1,1,$width-2,$black-2,$white);