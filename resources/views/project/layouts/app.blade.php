<!DOCTYPE html>
<html lang="en">
<head>
    @include('project.layouts.head')

</head>
<body>
<div id="wrapper">
		
    <!--Header Content-->
		@include('project.layouts.header')
		
    
    <!--Side Left Content-->
	   @include('project.layouts.sideleftcontent')
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     TOP SEARCH CONTENT     ///////
		//////////////////////////////////////////////////////////////////////
		-->
		<div class="widget-top-search">
			<span class="icon"><a href="#" class="close-header-search"><i class="fa fa-times"></i></a></span>
			<form id="top-search">
					<h2><strong>Quick</strong> Search</h2>
					<div class="input-group">
							<input  type="text" name="q" placeholder="Find something..." class="form-control" />
							<span class="input-group-btn">
							<button class="btn" type="button" title="With Sound"><i class="fa fa-microphone"></i></button>
							<button class="btn" type="button" title="Visual Keyboard"><i class="fa fa-keyboard-o"></i></button>
							<button class="btn" type="button" title="Advance Search"><i class="fa fa-th"></i></button>
							</span>
					</div>
			</form>
		</div>
		<!-- //widget-top-search-->
		
		<!--Main Show Content-->
	       @include('project.layouts.maincontent')
    
        <!--Modal Message Content-->
	       @include('project.layouts.modalmessages')
		
		<!--Modal Notification Content-->
	
		   @include('project.layouts.modalnotification')
		
        <!--Left Nav Content-->
	       @include('project.layouts.leftnav')
		
        <!--Right Nav Content-->
	       @include('project.layouts.rightnav')
		
</div>
<!-- //wrapper-->

@include('project.layouts.footer')

</body>
</html>
