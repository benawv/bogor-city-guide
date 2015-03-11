searchVisible = 0;
transparent = true;

$(document).ready(function(){
    /*  Activate the tooltips      */
    $('[rel="tooltip"]').tooltip();
    
    
    /*var $validator = $("#myform").validate({
        debug: true,
		  rules: {
		    alamat: {
		      required: true,
		    },
		    harga: {
		      required: true,
		      
		    },
              merk: {
		      required: true,
		      
		    },
              model: {
		      required: true,
		      
		    },
		    tipe: {
		      required: true,
		      
		    },
              wilayah: {
		      required: true,
		      
		    },
               kapasitas: {
		      required: true,
		      
		    },
              periode: {
		      required: true,
		      
		    },
               email: {
		      required: true,
		      
		    }
		  }
		}); */
    
    $('#wizard').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',
         onNext : function(tab, navigation,index){
            
             console.log( tab );
             console.log( navigation );
             console.log( index );
             
            console.log( 'on next' );
    
             
            console.log( 'abis validate' );
             
            var $valid = $("#myform").valid();
             
            console.log( 'abis valid' );
	  		
            if(!$valid) {
                console.log( 'invalid' );
                $validator.focusInvalid();
                return false;
            }
            else
            {
                console.log( 'valid' );
            }
             

//           //check number of tabs and fill the entire row
//           var $total = navigation.find('li').length;
//           $width = 100/$total;
//           
//           $display_width = $(document).width();
//           
//           if($display_width < 400 && $total > 3){
//               $width = 50;
//           }
//           navigation.find('li').css('width',$width + '%');
             
        },
        
        
        onPrevious : function(tab, navigation,index){
            
            
            
        },
        
         onTabClick : function(tab, navigation, index){
            // Disable the posibility to click on tabs
            return false;
        }, 
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            
            var wizard = navigation.closest('.wizard-card');
            
            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $(wizard).find('.btn-next').hide();
                $(wizard).find('.btn-finish').show();
            } else {
                $(wizard).find('.btn-next').show();
                $(wizard).find('.btn-finish').hide();
            }
        }
    });
    
        

    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
    
    
    $('[data-toggle="wizard-radio"]').click(function(event){
        wizard = $(this).closest('.wizard-card');
        wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
        $(this).addClass('active');
        $(wizard).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked','true');
    });
    
    $height = $(document).height();
    $('.set-full-height').css('height',$height);
    
    //functions for demo purpose
    
    
});


 //Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
    












