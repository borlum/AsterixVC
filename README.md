#Asterix VC - A PHP Framework in less than 100 lines of code.
AsterixVC, or *VC, is a small MVC framework without the M - so no implementation of models.
It was built during plugin development, where the plugin suddenly grew out of hands to just be single files of PHP. The framework gives added structure to small projects.

##How to use it
If you are not familiar with existing PHP (M)VC frameworks, then fear not. The project tree looks like this:

	.
	├── Classes
	│   ├── Controller.php
	│   └── Router.php
	├── controllers
	│   └── Hello_controller.php
	├── index.php
	├── README.md
	└── views
	    └── view_hello.php

The Classes-folder is not to be touched, unless you wan't to further develop on the framework. This is recommended. The framework is bare minimum - so please, customize to your needs.

The controllers-folder is where you will be creating controllers. Take a look at the included Hello_controller.php, it should get you started.

The views-folder is where you will be creating views. Take a look at the included view_hello.php, it should get you started aswell.

The index.php combines it all - including the classes, setting up the router and so on.

##Go nuts!
And thats about it - if more documentation is needed, look through the source. It is not well-documented, but it should be understandable. Otherwise, contact me:

	joakim (at) roevhat.dk
	@roevhat