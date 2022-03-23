<style type="text/css">

        {   margin: 0;padding: 0;box-sizing: border-box;}

      nav{
        width: 100%; height:15vh;
       background-image:url('<?php echo base_url();?>image/nab2.jpg');
            background-repeat: no-repeat;
            background-size: cover;    
            color:white;
            display: flex; justify-content: space-between; align-items: center; text-transform:uppercase; position: sticky;
            top: 0;
            position: sticky;
       }
       nav .logo{
        width: 25%; text-align: center;
       }
       nav ul{
        width: 60%;
        display: flex;justify-content: space-between;
        text-decoration: none;
       }
       nav li>a{
        width: 40%;
        color:white;
        
        font-weight: bold;
       }
       ul li.hov>a:hover{
      background-color: gray;
      color:#fff;
      padding:12px 14px;
            transition: all 0.4s ease-in-out;
    }
      </style>  
           
<nav>
    		<div class="logo"><h1>PHARMA HOME</h1></div>
    		<ul>
    		
    			
    			<li class="hov"><a href="<?php echo base_url();?>index.php/home/index">Home</a></li>
          <li class="hov"><a href="">About us</a></li>
    			<li class="hov"><a href="categories.php">Products</a></li>   
    			<li class="hov"><a href="<?php echo base_url();?>index.php/Home/contact">Contact Us</a></li>
          
          <li class="hov"><a href="<?php echo base_url();?>index.php/Home/login" class="btn1">LOGIN</a>
            </li>
            <?php
            $data=$this->session->all_userdata();
            if(isset($data['USER']['name'])) {?>
            <li class="btn btn-sm btn-warning"><a href="<?php echo base_url(); ?>index.php/home/panel"  >
              Welcome <?php echo $data['USER']['name']; ?></a></li>

          <li class="btn btn-sm btn-danger"><a href="<?php echo base_url();?>index.php/Home/logout" >
          Logout</a></li>
        <?php } ?>
    		
    		
    		</ul>
    	</nav>
    	