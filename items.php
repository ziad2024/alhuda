<?php include 'include/header.php';
 include 'include/dbConnect.php';?>
<div class="clearfix" >&nbsp;</div>
<div class="clearfix" >&nbsp;</div>
<div class="clearfix" >&nbsp;</div>
<div class="clearfix" >&nbsp;</div>
<div class="clearfix" >&nbsp;</div>

            <div class="container " style="direction:rtl;margin-top:20px">
                <div class="row">
   
                <div class="col-md-3">
                <img class="img-responsive" src="img/ahkaam_yayeh_ibn_husain.png" alt="book">
               </div>

              <?php if (isset($_GET['bookId'])) {
            $id=$_GET['bookId'];
            $sqlBook="SELECT `books`.`book_id`,`books`.`book_since`,`books`.`book_cat`, `books`.`book_name`,`books`.`book_Active`, `book_catugraty`.`cat_name`, `book_since`.`since_name`, `authers`.`auther_name` 
            FROM `books` 
            LEFT JOIN `book_catugraty` ON `books`.`book_cat` = `book_catugraty`.`cat_id` 
            LEFT JOIN `book_since` ON `books`.`book_since` = `book_since`.`since_id` 
            LEFT JOIN `authers` ON `books`.`book_auther` = `authers`.`auther_id`WHERE `book_id`=$id ";
            // $result=$conn->query($sqlBook);
            // $row=$result->fetch_assoc(); 
            $result=$conn->prepare($sqlBook);
            $result->execute();
            $row= $result->fetch();
          ?>

                <div class="col-md-5">
                             <h2 class="mt-1 text-center"><?php echo $row['book_name']?> </h2>
                                <div class="bd-example">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">المتغير</th>
                                                <th scope="col">القيمة</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">اسم الكتاب</th>
                                                <td><?php echo $row['book_name']?></td>

                                            </tr>
                                            <tr class=" ">
                                                <th scope="row">التصنيف</th>
                                                <td><?php echo $row['cat_name']?></td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">العلم</th>
                                                <td><?php echo $row['since_name']?></td>

                                            </tr>
                                            <tr class="">
                                                <th scope="row">المؤلف</th>
                                                <td><?php echo $row['auther_name']?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-lg-8 btn orange" style="
                                                  margin-bottom: 20px;">
                                                  تحميــــــــل
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
                            

                        </div><?php }?>





                      
                        <div class="col-md-4"> 
                            <ul class="list-group">
                            <li class="list-group-item text-center"><h2>كتب مشابهة</h2></li>
                                <?php
                                $book_cat=$row['book_cat'] ;
                                $book_since=$row['book_since'] ;
                            $sql="SELECT `book_id`, `book_name`
                            FROM `books` WHERE `book_cat`='$book_cat' AND `book_since`='$book_since' and `book_id` <> $id";
                            $result=$conn->prepare($sql);
                            $result->execute();
                            if($result->rowcount()>0){
                            while($row=$result->fetch()){
                            ?>
                                <li class="list-group-item "><a href="items.php?bookId=<?php
                                echo $row['book_id'] ;?>"><?php echo $row['book_name'] ;?> </a></li>
                                <?php }} else{
                                    echo "لايوجد كتب مشابهة";
                                } ?>
                             </ul>
                        </div> 
                     </div>
            
             
     </div>
     



     
    

<?php include 'include/footer.php';?>