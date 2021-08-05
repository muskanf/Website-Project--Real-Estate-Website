<?php
include './config.php';
//TO DISPLAY GOALS
function displayGoals(){
    global $connection;
    $query="SELECT * from oc_property_status ORDER BY name asc";
     $select_all_goals=mysqli_query($connection,$query);
    $output=" <select name='filtergoals' id='filtergoals'>";
     $output.="<option selected>--- Please Select ---</option>";
       while($row=mysqli_fetch_assoc($select_all_goals)){     
           $prop_status_id=$row['property_status_id'];
           $prop_name=$row['name'];
                  $output.="<option value=$prop_status_id>$prop_name</option>";
       }
                $output.="</select>";
    echo $output;
}

//TO DISPLAY CATEGORIES
function displayTypes(){
    global $connection;
    
    $query="SELECT * FROM oc_category_description ORDER BY name ASC";
    $select_all_categories=mysqli_query($connection,$query);
    
    $output="<select name='filtertype' id='filtertype'>";
    $output.="<option selected>--- Please Select ---</option>";
    while($row=mysqli_fetch_assoc($select_all_categories))
    { 
        $cat_id=$row['category_id'];
        $cat_name=$row['name'];
        $output.="<option value=$cat_id>$cat_name</option>";
    }
                $output.="</select>";
    echo $output;
}

//TO DISPLAY CITIES
function displayCities(){
    global $connection;
    $query="SELECT DISTINCT(city) FROM `oc_property`  
ORDER BY `oc_property`.`city` ASC";
    $select_all_cities=mysqli_query($connection,$query);
    
    $output="<select name='filtercities' id='filtercities'>";
     $output.="<option selected>--- Please Select ---</option>";
        while($row=mysqli_fetch_assoc($select_all_cities))
        {   
            $city=$row['city'];
            $output.="<option value='$city'>$city</option>";
                  
        }
                $output.="</select>";
    echo $output;
}

//TO SHOW FILTERED DATA
 function filter(){ 
     global $connection;
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
     if(isset($_POST['request']))
     {
         $output="";
  if(isset($_GET['page'])){
                    $page=$_GET['page'];
                }else{
                    $page="";
                }
                if(empty($page)||$page==1){
                    $page_1=1;
                }else{
                    $page_1=($page*5)-5;
                } 
                $post_rows_count="select * from oc_property";
                $find_count=mysqli_query($connection,$post_rows_count);
                $count=mysqli_num_rows($find_count);
                $count=ceil($count/5);
         if(!empty($_POST['status'])){$staus=escape($_POST['status']);}
         if(!empty($_POST['category'])){$category=escape($_POST['category']);}
         if(!empty($_POST['cities'])){$city=escape($_POST['cities']);}
         if(!empty($_POST['location'])){$location=escape($_POST['location']);}
         if(!empty($_POST['area'])){$area=escape($_POST['area']);}
         if(!empty($_POST['price'])){$price=escape($_POST['price']);}
         if(!empty($_POST['keyword'])){$keyword=escape($_POST['keyword']);}
         $query="select * from oc_property p INNER join oc_property_description pd INNER JOIN oc_property_to_category pc where p.property_id=pd.property_id and p.property_id=pc.property_id ";
         if(!empty($status)){$query.=" and p.property_status_id=$status";}
         if(!empty($category)){$query.=" and pc.category_id=$category";}
         if(!empty($city)){$query.=" and p.city='$city'";}
         if(!empty($location)){$query.=" and p.local_area like'$location'%";}
         if(!empty($area)){$query.=" and p.area like'$area'%";}
         if(!empty($price)){$query.=" and p.price like'$price'%";}
         if(!empty($keyword)){$query.=" and pd.tag like'$keyword'%";}
         $query.=" limit $page_1,5";
         echo $query;
         $select_all_posts_query=mysqli_query($connection,$query);
                $draft_count=mysqli_num_rows($select_all_posts_query);
          if($draft_count<0)
                {
                    echo "<h1 class='text-center'> NO POST AVAILABLE</h1>";
                }
                else
                {
                    while($row=mysqli_fetch_assoc($select_all_posts_query)){
                        $id=$row['property_id'];
                        $title=$row['name'];
                        $discription=$row['description'];
                        $image=$row['image'];
                        
                        $output.="<div class='blog-slider'>";
                $output.="<div class='blog-slider__img'>";
                  $output."<img src=http://portal.ebtada.com/image/cache'$image' alt=''>";
                $output.="</div>";
                $output.="<div class='blog-slider__content'>";
                  $output.="<div class='blog-slider__title'>$title
                        <div class='blog-slider__text'>";
                        
                        $output.=substr(html_entity_decode($discription),0,350)."....";
                        $output.="</div>
                  </div> 
                  <div class='blog-slider__button'><button><a href='viewingproperty.php?id=$id'>VIEW</a></button></div>
            </div>
              </div>";
                    }
                    
    $output.="<hr><ul class='pager'>";
            for($i=1;$i<=$count;$i++)
            {
                if($i==$page){
                $output.="<li><a class='active_link' href=http://www.ebtada.com/propertycatalogue.php?page=$i>$i</a></li>";
                }
                else{
               echo "<li><a href=http://www.ebtada.com/propertycatalogue.php?page=$i>$i</a></li>";
                }
            }
            
        $output.="</ul>";
        echo $output;

        
                }
     }
       // $session=$_POST['session'];
        //$compaign=$_POST['compaign'];
        //$donation_id=$_POST['donation_id'];
//       $data=[
//                'session'=>"",
//                'compaign'=>"",
//                'donation_id'=>""
//            ]; 
//        $output = '';  
//        $where='';
//            if ($session!='') {
//              $data["session"]=$session;
//              $_SESSION['session']=$session;
//             }            
//            if ($compaign!='') {
//            	$data["compaign"]=$compaign;
//            	$_SESSION['compaign']=$compaign;
//  	        }
//
//  	   if($donation_id!='')
//       {
//           $data["donation_id"]=$donation_id;
//           $_SESSION['donation_id']=$donation_id;
//       }
     
     
 }
filter();


//default function to check the query error
function confirmQuery($query){
    global $connection;
    if(!$query){
        die("QUERY FAILED".mysqli_error($connection));
    }
}

//To prevent from Sql injection
function escape($string){
     global $connection;
    
        return mysqli_real_escape_string($connection,trim($string));
//    mysqli_real_escape_string()
}


?>