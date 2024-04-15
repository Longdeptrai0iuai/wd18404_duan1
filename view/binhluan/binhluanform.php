<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
 $idpro=$_REQUEST['idpro'];
 $dsbl=load_all_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/styleview.css">
</head>
<body>
<div class="row mb">
                    <div class="boxcontent2 binhluan">
                    <table>
                        <?php

                        foreach ($dsbl as $bl) {
                            extract($bl);
                            echo '<tr><td><strong>'.$iduser.'</strong></td>';
                            echo '<td>'.$noidung.'</td>';
                            echo '<td><i>'.$ngaybinhluan.'</td></i></tr>';
                        }
                        // foreach ($dsdm as $dm) {
                        //     extract($dm);
                        //     $linkdm="index.php?act=sanpham&iddm=".$id;
                        //     echo '<li>
                        //     <a href="'.$linkdm.'">'.$name.'</a>
                        //     </li>';
                        // }
                        ?>
                        </table>
                    </div>
                    <div class="boxfooter searchbox">
                        <?php
                        if(isset($_SESSION['user']) && $_SESSION['user']>0){
                        ?>
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                            <input type="hidden" name="idpro" value="<?=$idpro?>">
                            <input type="text" name="noidung" placeholder="Nhập bình luận...">
                            <input type="submit" value="Gửi bình luận" name="guibinhluan">
                        </form>
                        <?php
                        }else{
                            echo '<div class="checklogin"><b>Bạn phải đăng nhập mới có thể bình luận!!!<a href="index.php?act=login">Đăng nhập ngay</a></b></div>';
                            
                        }
                        ?>
                    </div>
                    <?php
                    if(isset($_POST['guibinhluan'])&& $_POST['guibinhluan']){
                        $noidung=$_POST['noidung'];
                        $idpro=$_POST['idpro'];
                        $iduser=$_SESSION['user']['name'];
                        $ngaybinhluan=date('d/m/Y');
                        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                        header("Location: ".$_SERVER['HTTP_REFERER']);

                    }
                    ?>
                </div>
                </div>
                </body>
</html>