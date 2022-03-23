<style type="text/css">

        {   margin: 0;padding: 0;box-sizing: border-box;}

      nav{
        width: 100%; height:15vh;
       background-image:url('<?php echo base_url();?>image/nab2.jpg');
            background-repeat: no-repeat;
            background-size: cover;    
            color:white;
            display: flex; justify-content: space-between; align-items: center; text-transform:uppercase; position: sticky;
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
       ul li>a:hover{
      background-color: gray;
      color:#fff;
      padding:12px 14px;
            transition: all 0.4s ease-in-out;
    }
      </style>  
           
<nav>
    		<div class="logo"><h1>PHARMA HOME</h1></div>
    		<ul>
    		
    			
    			<li><a href="<?php echo base_url();?>index.php/Home/front">Home</a></li>
    			<li><a href="<?php echo base_url();?>index.php/home/category">HEALTH PRODUCT</a></li>   
    			<li><a href="<?php echo base_url();?>index.php/Home/contact">CONTACT</a></li>
          <li><a href="order.php">VACCINE AND OXYGEN</a> </li>  
          <li><a href="<?php echo base_url();?>index.php/Home/login" class="btn1">LOGIN</a>
            </li>
          <li><a href="<?php echo base_url();?>index.php/Home/registration">REGISTER HERE</a></li>
    		
    		
    		</ul>
    	</nav>
    	