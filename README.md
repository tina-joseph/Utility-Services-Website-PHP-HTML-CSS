# Utility-Services-Website-PHP
This repository includes the code to create a Utility services website which serves as a one-stop destination for its customers to get access to numerous services from one website.

ABSTRACT
Utility Services, a web-based platform, streamlines the laborious task of searching for trustworthy and economical service 
providers for a range of utility services tailored to homeowners. The fragmentation of the service provider market, coupled 
with the absence of a centralized platform for accessing multiple services, exacerbates the challenge of locating and hiring 
suitable providers. To overcome these obstacles, our platform incorporates an online booking system featuring transparent 
pricing and a rating and review system that empowers customers to provide feedback on their service orders. The 
application is developed with proficiency in several programming languages, including HTML, PHP, JavaScript, AJAX, CSS, 
Bootstrap, and jQuery. HTML and PHP are employed to create front-end pages and pages visible after user login, 
respectively. JavaScript and AJAX provide for validation and calling of PHP pages, respectively. CSS and Bootstrap cater to 
styling front-end pages, and jQuery facilitates the manipulation of HTML element values. Our platform serves as a one-stopshop for customers to access a multitude of services from a single website, thereby generating more business for service 
providers.
Additional Keywords and Phrases: Customer, Vendor, Utility Services.
1. INTRODUCTION
Utility Services is a web-based platform that connects service providers with customers looking for services for their homes. 
Millions of customers are looking for trustworthy and economical service providers for a variety of utility services, making 
the service provider market a quickly expanding and fiercely competitive one. Although many customers must wade 
through a multitude of possibilities of websites and frequently rely on word-of-mouth recommendations, locating and 
hiring each service provider may be a time-consuming and difficult procedure. Additionally, service providers themselves
may struggle to find new customers and grow their businesses. However, to address these challenges, we developed our 
web-based platform, intending to solve the lack of a centralized platform for homeowners to access various utility services, 
which can serve as a one-stop destination for its customers to get access to numerous services from one website, further 
resulting in more business for service providers.
The Utility Services platform offers features like an online booking system with transparent pricing and a rating 
and review system that enables customers to leave feedback for their service orders, which helps other customers make 
informed decisions. Thus, this website simplifies locating and hiring service providers and offers a remedy to the challenges 
for both homeowners and service providers.
1.1 Motivation
In the current times, when most of the things are available under one roof, looking for the right utility service is still a timeconsuming task. Finding the right utility service provides requires an extensive search process which includes internet 
search for service providers in a specified area, researching their reviews, text/call/email them your personal details, spend 
numerous hours talking to service providers explaining your needs, etc.
1.2 Target Audience
The target audience for the utility services website is homeowners, who need utility services and service vendors/providers 
who offer these services.

2. WEBSITE DESCRIPTION
The Utility Services platform simplifies the tedious task of searching for the right service providers. This approach provides 
dynamic real-time transparent pricing based on the area to be serviced. Now, all the services required by a homeowner are 
available in a single application. The homeowners can easily browse through the services, see the rating and reviews for 
that service, see the price of the service based on the total area of the service and book a slot that suits them.

2.1 Customer Interaction 
The Utility Services platform offers a variety of services and features for customers and vendors. If a customer wants to 
access our website, the customer would start by creating a customer account on our Utility Services website, which would 
require the customer to enter details like name, address, email, contact number, username, and password, which has certain 
standard validation features to be satisfied. Once the customer account is created, the customer can login to the website, 
the user can access the homepage, which provides an overview of the all the available services. Additionally, for easier 
navigation, each page of our website has a drop-down menu of all the services as a header. The user can browse through 
the services based on categories such as lawn care, pest control and so on. The customer can browse within each category 
and then select the required service, which then redirects to the services page, that has a brief description and the features 
of the services, and the customer can also view the ratings and reviews left by other customers for that selected service. 
The service page also has a field to enter the area for service, which then dynamically calculates and displays an estimated 
cost of service based on the input area. The estimated cost of service is calculated using the formula:
Estimated cost of service = area (in sq. ft) * cost of service (per sq. ft)
On the same page, the customer has the option to change the zip code the service address, which is by default 
taken as the zip code per the customer’s registered address details and this selected is zip code is used to select the vendor 
for the selected service and region. After selecting the service and its associated fields the customer can then place an order, 
which then redirects to the cart page.

On reaching the cart page, the customer’s registered address will be visible, but if they want the service at a 
different address, they can easily update the service address here. The area and total cost with tax of the service will be 
displayed based on the area the customer selected from the service details page, and they can also edit the area to get the 
corresponding total cost which is dynamically calculated. The total cost of service is dynamically calculated using the 
formula:
Total cost of service = (Base pay +( area (in sq. ft) * cost of service (per sq. ft)) + 7% service tax
Total cost of service = ($20 +( area (in sq. ft) * cost of service (per sq. ft)) + 1.07
Additionally, there is a dropdown menu showing the available service slot times and the customer can select the 
required slot from the given options, and then the customer can click on the button ‘Place Order’, which then display another 
page with the order details of the booked service such as the billing address, service address, order ID, service details and
the cost associated. 
Further, the customers can look up their order history on the utility services website by using the header menu 
on any page. The consumer can access information about previous orders, such as the service provider, service type, and 
order date, on this page. To help other customers, make informed choices about the quality of service offered by the 
vendors, the customer also could contribute ratings and reviews for the completed orders, which will be represented as the 
rating feature on the associated services page. Customers can also modify their profile details including their address, email 
address, and phone number through the website's header menu. Instead of constantly altering the facts while placing an 
order, this enables the consumer to keep their information up-to-date and ensure it is easily accessible. Overall, the user 
interaction with our website is designed to be simple, convenient, and user-friendly. 

2.2 Vendor Interaction 
Figure 3: Flow chart of the vendor interaction with the website
For a vendor to access the website, they need to get the credentials from the admin side, which is further used to login to 
the website. Upon logging into the Utility Services website, the vendor can access the orders page on the home screen, 
where all the orders placed for the vendor are displayed. The vendor can view orders for today, tomorrow, and the current 
week, separately by clicking on each corresponding button on the home page. Additionally, for the orders for today, there 
is an option of "View Details" which allows the vendor to mark that order as completed once the service has been provided. 
In addition, the vendor can access the "All Orders" page from the header menu, which displays all completed orders for the 
current year. The vendor can also view completed orders for this month and this week separately by clicking on the 
respective buttons.
Another functionality available to the vendor on the header menu is to create service slots. This page has a 
calendar structure to select the date and slots, which are available for 8am, 10am, 1pm, and 3pm, with validations to ensure 
that a slot is not already created and that a previous date is not selected. The vendor can also access a menu on the header 
to view all the slots, along with their status as booked or available.

3. PROJECT COMPONENTS 
3.1 Tables Created
• Customer: This table contains details of customers. CustID is an auto increment column, which is created when a 
new customer is inserted into the table. It has columns pertaining to customer specific details like name, address, 
contact, email, etc. The password stored is encrypted using MD5 algorithm.
• Vendor: This table contains details of vendors. VenID is an auto increment column, which is created when a new 
vendor is inserted into the table. It has columns pertaining to vendor specific details like name, address, contact, 
email, etc. The password stored is encrypted using MD5 algorithm. It also has a Zipserved column which is used 
to determine which vendor provides service in which zip code area.
• SCategories: This table has details of the broad categories of Services. CatID is auto increment column. The image
location column stores the image's location, and it is shown on the customer's landing page.
• Services: This table has many to one mapping with the Scategories table. Each category can have multiple services 
associated with it. The description and features columns store the data visible on the Service details page. It also 
has a cost column which has cost per sq. Ft. For the service.
• ServiceVendor: This table is a mapping table between the vendors and services.(Example: One vendor can provide 
many services; one services can be offered by many vendors based on the ZipServed column on the Vendor table)
• VendorAvailability: This table stores the availability of vendor for each date. It can store multiple slots for each 
date. It also has an is_available column which shows if the slot is available or not available.
• Orders: This table has details of all the orders. SerID is the foreign key of the Services table, VenID is the foreign 
key of the Vendor table and CusID is the foreign key of the Customer table. It also has address and contact 
information for the Order. SlotID is foreign key of the VendorAvailabiliy table. OrderStatus gives information 
whether the order is in pending status or completed status.
• Reviews: This table stores reviews and rating for all the Orders. OrderID is the foreign key of the Orders table.

4. FUTURE WORK 
Our utility service website entails several functional elements and long-term goals intended to enhance our services, expand 
our clientele, and guarantee satisfaction for our customers. One of the primary objectives we have is to expand the range of 
cities, towns, and neighborhoods in our operating region so that we can serve a wider spectrum of clients. In addition to 
broadening our coverage area, we intend on diversifying our services by including more categories/types of services that 
homeowners might require, like plumbing, electrical, and roofing services. Also, we plan to give our customers personalized 
service suggestions based on their prior service orders. This would ensure that they got the best services possible and 
would foster a sense of loyalty among them.
Also, we intend to implement a payment gateway for transactions made on behalf of our customers and email 
functionalities for the service orders, to enhance the security, effectiveness, and convenience of the payment process. As a 
result, our customers could monitor their service requests and receive email confirmation of their orders. Another 
functional plan for our utility service website to provide an additional layer of security by implementing a 2-factor 
authentication or a captcha for user login. This extra security precaution would assist in stopping hostile assaults and 
automated bots from accessing our website and customer data without authorization.
REFERENCES
[1] Bootstrapmade. Bootstrap template. Retrieved from https://bootstrapmade.com/mentor-free-education-bootstraptheme/download/
[2] Home page image. Retrieved from
https://www.gannett-cdn.com/-mm-/481602f6d9edcd4edf3b3b8a2ff6d2d98ae8eb24/c=0-0-507-286/local/-
/media/USATODAY/USATODAY/2014/04/11//1397233607000-
144292803.jpg?width=507&height=286&fit=crop&format=pjpg&auto=webp 
[3] Power wash image. Retrieved from
https://www.hotsyab.com/wp-content/uploads/2020/06/Concrete_Cleaning.jpg
[4] Lawn Category image. Retrieved from
https://static4.depositphotos.com/1007968/368/i/450/depositphotos_3687189-stock-photo-manicured-yard.jpg
[5] Snow Removal image. Retrieved from
https://www.rocklandsupplies.com/uploads/thumbnails/SnowShovelingEdmontonSnowRemoval_1.jpg.77f9b7b1.jpg
[6] Pest control image. Retrieved from
https://hybridpestcontrol.com/wp-content/uploads/2021/07/Commercial-and-Residential-Pest-control-UThybridpestcontrol-scaled-2560x1280.jpeg
[7] Image hover example. Retrieved from https://stackoverflow.com/questions/53651369/image-hover-effect-all-at-thesame-time
[8] Login template. Retrieved from https://bootsnipp.com/snippets/z8aQr
[9] Image styling. Retrieved from https://www.w3schools.com/css/css3_images.asp
[10] W3 Schools tutorials in PHP, AJAX, HTML, JavaScript. Retrieved from https://www.w3schools.com.
[11] JavaTpoint tutorials in PHP. Retrieved from https://www.javatpoint.com
[12] Tutorialspoint tutorials in PHP, HTML. Retrieved from https://www.tutorialspoint.com
[13] ProgrammingKnowledge. User Registration Form with PHP and MySQL Tutorial 5 - Add Form Validation + Final Demo. 
YouTube Video. Retrieved from https://www.youtube.com/watch?v=3FSNgLDjors
[14] Kevin Skoglund. Ajax with PHP: Add Dynamic Content to Websites. LinkedIn Learning, Retrieved from
https://www.linkedin.com/learning/ajax-with-php-add-dynamic-content-to-websites
[15] Webslesson. Create Simple Shopping Cart using PHP & MySQL. YouTube Video. Retrieved from
https://www.youtube.com/watch?v=0wYSviHeRbs
