/*
 *  Place copyright or other info here...
 */

(function(global, $){
    
    // Define core
    var codiad = global.codiad,
        scripts= document.getElementsByTagName('script'),
        path = scripts[scripts.length-1].src.split('?')[0],
        curpath = path.split('/').slice(0, -1).join('/')+'/';

    // Instantiates plugin
    $(function() {    
        codiad.active_users.init();
    });

    codiad.active_users = {
        
        // Allows relative `this.path` linkage
        path: curpath,

        init: function() {

            // Start your plugin here...

        },

        /**
         * 
         * This is where the core functionality goes, any call, references,
         * script-loads, etc...
         * 
         */
         
         active: function() {
            alert('Hello World');  
         },
         open: function() {
            width = Math.round(($(document).width())/1.8);
            codiad.modal.load(width,this.path+'dialog.php');
            codiad.modal.hideOverlay();
        }

    };

})(this, jQuery);
