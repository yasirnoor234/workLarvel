<!DOCTYPE html>
<html lang="en">
<head>
    <!--Head Content-->
    @include('caplet.layouts.head')

</head>
<body>
<div id="wrapper">
		
    <!--Header Content-->
		@include('caplet.layouts.header')
		
    
    <!--Side Left Content-->
	   @include('caplet.layouts.sideleftcontent')
	
    <!--Top Search-->
        @include('caplet.layouts.topsearch')
	       
    <!--Main Show Content-->
	       @include('caplet.layouts.maincontent')
     <!--Modal Message Content-->
	       @include('caplet.layouts.modalmessages')
    <!--Modal Notification Content-->
	
		   @include('caplet.layouts.modalnotification')
	  <!--Left Nav Content-->
	       @include('caplet.layouts.leftnav')	
    <!--Right Nav Content-->
	       @include('caplet.layouts.rightnav')
		
</div>
    <!--Footer Content-->
    @include('caplet.layouts.footer')
</body>
</html>
