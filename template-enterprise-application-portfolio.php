<?php
/*
Template Name: Enterprise Potfolio Template
*/
?>
<?php get_header('solution'); ?>

<section class="ent-port-head text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('brand_title');?></h1>
                <h2><?php the_field('global_brand'); ?></h2>


<?php if( have_rows('portfolio_brand') ): ?>
 <ul class="enterprise-brands">
    <?php while( have_rows('portfolio_brand') ): the_row(); ?>
    <li>

    <?php $image = get_sub_field('brand_image'); ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
    </li>
    <?php endwhile; ?>
 </ul>
<?php endif; ?>

            </div>
        </div>
    </div>
</section>
<section class="ent-port-main">
	<?php if( have_rows('portfolio_list') ): 
        $i = 1;
        ?>
        <?php while ( have_rows('portfolio_list') ) : the_row(); ?>
    	    <section class="ent-port-main-inner-section" style="background:<?= the_sub_field('background_color'); ?>">
    	        <div class="parent-port-box">
    		            <div class="img-port-box"> 
    		            	<img src="<?php the_sub_field('porfolio_image'); ?>" alt="<?php echo $image['alt'] ?>"> 
    		            </div>
    		            <div class="content-port-box">
    		            	<h2><?php the_sub_field('enterprises_name'); ?></h2>
    		            	<h3><?php the_sub_field('enterprises_title'); ?></h3>
    		            	<p><?php the_sub_field('enterprises_paragraph'); ?></p>
    		            </div>
    	        </div>
    	    </section>
        <?php $i++;  endwhile; ?>
	<?php endif; ?>
    <!-- <section class="ent-port-main-inner-section bg-2-ent-port">
        <div class="parent-port-box">
            <div class="img-port-box"> <img src="/wp-content/uploads/2019/09/portfolio/dashboard-app.png" alt="dashboard-app"> </div>
            <div class="content-port-box">
                <h2>Dashboarding</h2>
                <h3>A Powerful Dashboard Application Which Simplifies Business Decisions</h3>
                <p>Agility is the prime objective for organizations today but the massive data volumes and disparate enterprise systems stand in the way. An Enterprise Dashboard works as an effective tool for the management team and executives to get a top-level view of their enterprise through extraction and generation of KPIs from the enterprise software systems. It offers a consolidated view of the key metrics that can be monitored in a user-friendly manner. With the entire data available at one place, it becomes easier for executives and decision-makers to improve the overall lead time and the quality of decision-making respectively.</p>
            </div>
        </div>
    </section>
    <section class="ent-port-main-inner-section bg-3-ent-port">
        <div class="parent-port-box">
            <div class="img-port-box"> <img src="/wp-content/uploads/2019/09/portfolio/enterprise-app.png" alt="enterprise-app"> </div>
            <div class="content-port-box">
                <h2>SharePoint Online</h2>
                <h3>An Innovative Enterprise Application That Connects Disparate Systems</h3>
                <p>Collaboration and cohesion are perhaps the biggest challenges for large organizations. An application based on SharePoint Online serves as a perfect solution for the large-scale enterprises looking to improve their operational efficiency through collaboration. The key purpose that the application serves is connecting the disparate systems across the business for streamlining workflows, increasing transparency, and improving document management. The inconsistent information across departments becomes unified at one platform, making it easily accessible and usable for collaborative decision-making.</p>
            </div>
        </div>
    </section>
    <section class="ent-port-main-inner-section bg-4-ent-port">
        <div class="parent-port-box">
            <div class="img-port-box"> <img src="/wp-content/uploads/2019/09/portfolio/product-launch.png" alt="product-launch"> </div>
            <div class="content-port-box">
                <h2>Micro Sites And CMS</h2>
                <h3>Supporting Product Launch & Branding Strategies With CMS Microsites</h3>
                <p>A successful product launch requires more than just creating a new product line; it also involves creating awareness and buzz for the upcoming products ahead of their release. A content-based strategy using CMS microsites that educate, excite, and engage the core audience plays a key role in leveraging the product and brand. The idea is to choose the right CMS platform that enables impressive presentation of content so that it connects with the audience and drives recall value for the brand. More critically, the microsite is built on a populae CMS, so that it could be handed off easily to other contributors in the future.</p>
            </div>
        </div>
    </section>
    <section class="ent-port-main-inner-section bg-5-ent-port">
        <div class="parent-port-box">
            <div class="img-port-box"> <img src="/wp-content/uploads/2019/09/portfolio/travel-desk-management.png" alt="travel-desk-management"> </div>
            <div class="content-port-box">
                <h2>Travel Desk Management</h2>
                <h3>Travel Desk Management Application To Book Flights Online</h3>
                <p>This is a unified portal which enterprises can use for employee travel procurement in a secure and transparent manner. The portal serves as a simple solution that resolves the complex travel needs of corporate users with large employee bases. They can use it to manage end-to-end employee travel in real-time. It is enriched with features such as live dashboards, flight search and booking, approval cycle, reliable documentation, vendor management, expense management, budget mapping, automated billing, tax management, and secure payments, settlements, and refunds.</p>
            </div>
        </div>
    </section>
    <section class="ent-port-main-inner-section bg-6-ent-port">
        <div class="parent-port-box">
            <div class="img-port-box"> <img src="/wp-content/uploads/2019/09/portfolio/connected-vehicles.png" alt="IOT Connected Cars And Connected Bikes"> </div>
            <div class="content-port-box">
                <h2>IOT Connected Cars And Connected Bikes</h2>
                <h3>An Application That Drives Connected Vehicles</h3>
                <p>As connected vehicles are poised to take the automotive industry by norm, brands need to keep pace with the trend. The connected vehicle application is capable of measuring the key navigational parameters for a vehicle in real-time and giving turn-by-turn directions as well. The metrics it measures include the distance covered, the time taken, and the speed of the vehicle during a specific drive. With the data captured by the application, it becomes possible to analyze the driving behavior and efficiency of vehicles and use the results for improving these parameters.</p>
            </div>
        </div>
    </section>
    <section class="ent-port-main-inner-section bg-7-ent-port">
        <div class="parent-port-box">
            <div class="img-port-box"> <img src="/wp-content/uploads/2019/09/portfolio/IOT-wearable-app.png" alt="IOT-wearable"> </div>
            <div class="content-port-box">
                <h2>IOT Wearable</h2>
                <h3>An IoT-Based Wearable App That Empowers Connected Cars</h3>
                <p>Wearables have the potential to transform the way drivers interact with their vehicles, as they are capable of fetching and sharing driver and vehicle information. In addition to the features such as navigation, remote access, and vehicle service, they open myriad possibilities from the health and safety perspective. Moreover, they provide reliable and accurate information and notifications immediately so that the requisite action can be taken to prevent accidents and breakdowns. In this way, wearable applications enable brands to enhance the driver experience and their offerings, while gaining a competitive advantage in the automotive landscape.</p>
            </div>
        </div>
    </section>
    <section class="ent-port-main-inner-section bg-8-ent-port">
        <div class="parent-port-box">
            <div class="img-port-box"> <img src="/wp-content/uploads/2019/09/portfolio/resource-planning.png" alt="travel-desk-management"> </div>
            <div class="content-port-box">
                <h2>Employee Management</h2>
                <h3>An Application For Resource Planning And Project Management</h3>
                <p>Most organizations with a massive workforce face the challenge related to employee management. The Employee Management Application serves as an effective tool for tracking the individual employee performance and measuring the value they serve to the enterprise. It has features such as enrollment, attendance, grievance redressal, and leave management. On the other hand, it enables the employees to enter their attendance, working hours, project hours, break timings, and overtime hours. The objective is to completely automate the employee management system for performance tracking and project billing.</p>
            </div>
        </div>
    </section>
    <section class="ent-port-main-inner-section bg-9-ent-port">
        <div class="parent-port-box">
            <div class="img-port-box"> <img src="/wp-content/uploads/2019/09/portfolio/data-access.png" alt="data-access-anywhere"> </div>
            <div class="content-port-box">
                <h2>Point Application (Custom Application)</h2>
                <h3>An Application That Empowers Business With Data Access Anywhere & Anytime</h3>
                <p>Businesses operate in varied locations and integrating the entire systems to access data anytime and anywhere can be a major challenge. This is exactly what a custom Point application is capable of doing. It enables the users to access and view data on their devices, even from remote locations. In addition to being a point application that facilitates sales, it integrates seamlessly with other systems such as Customer Relationship Management System, Inventory Management System, and analytics modules to present a holistic view of the business.</p>
            </div>
        </div>
    </section> -->
</section>

<style>
    .ent-port-head {
        padding: 30px 0;
    }
    
    .ent-port-head h1 {
        font-size: 22px;
        color: #444444;
    }
    
    .ent-port-head h2 {
        font-size: 28px;
        font-weight: bold;
        letter-spacing: 1px;
        color: #ff5200;
        padding-bottom: 30px;
        margin-top: 0;
    }
    
    .ent-port-head .enterprise-brands {
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: space-evenly;
        align-items: center;
    }
    
    .ent-port-head .enterprise-brands li {
        padding: 10px;
        height: 80px;
        align-items: center;
        box-shadow: 1px 1px 15px 1px #d8d4d4;
        display: flex;
        justify-content: center;
    }
    
    .ent-port-main-inner-section {
        height: 100vh;
    }
    
    .parent-port-box {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    
    .ent-port-main-inner-section .img-port-box {
        text-align: center;
    }
    
    .parent-port-box>div {
        width: 50%;
    }
    
    .content-port-box {
        color: #ffffff;
        padding: 0 70px 0 25px;
    }
    
    .content-port-box h3:after {
        display: block;
        content: '';
        height: 5px;
        max-width: 200px;
        background: #ffffff;
        position: absolute;
        margin-top: 10px;
        width: 100%;
    }
    
    .content-port-box h2 {
        font-size: 18px;
    }
    
    .content-port-box h3 {
        position: relative;
    }
    
    .content-port-box p {
        color: #ffffff;
        padding-top: 20px;
        line-height: 25px;
    }
    
    .bg-1-ent-port {
        background-color: #1968e6;
    }
    
    .bg-2-ent-port {
        background-color: #3a3a3a;
    }
    
    .bg-3-ent-port {
        background-color: #ffab24;
    }
    
    .bg-4-ent-port {
        background-color: #8241ba;
    }
    
    .bg-5-ent-port {
        background-color: #108e8c;
    }
    
    .bg-6-ent-port {
        background-color: #a62b2c;
    }
    
    .bg-7-ent-port {
        background-color: #f88d2e;
    }
    
    .bg-8-ent-port {
        background-color: #17678d
    }
    
    .bg-9-ent-port {
        background-color: #1b8edd;
    }
    
    @media (max-width:767px) {
        .ent-port-main-inner-section .img-port-box img {
            width: 100%;
        }
    }
    
    @media (max-width:1023px) {
        .parent-port-box>div {
            width: 100%;
        }
        .content-port-box {
            padding: 0 50px;
        }
        .ent-port-main-inner-section,
        .parent-port-box {
            height: auto;
            padding: 20px 0;
        }
    }
	@media only screen and (min-width: 1024px) and (max-width:1365px) {
  
.parent-port-box{
height:auto;
padding:30px 0;
}
.ent-port-main-inner-section{
height:auto;
}
.parent-port-box img{
width:100%;
}


}
</style>

<?php get_footer('solution'); ?>