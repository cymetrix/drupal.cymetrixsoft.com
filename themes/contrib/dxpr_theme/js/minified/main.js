
    document.addEventListener("DOMContentLoaded", function () {
    const caseStudyElement = document.getElementById("caseStudy");

    if (caseStudyElement) {
        if (caseStudyElement.classList.contains("caseSlider")) {
            console.log('slider');
            handleSliderLayout(caseStudyElement);
        } else if (caseStudyElement.classList.contains("caseGrid")) {
            handleGridLayout(caseStudyElement);
            console.log('grid');
        }
    }
});

function handleSliderLayout(caseStudyElement) {
    // Get the ncolumn class
    const columnClass = Array.from(caseStudyElement.classList).find(cls => cls.endsWith("column"));

    if (columnClass) {
        const columnCount = parseInt(columnClass.replace("column", ""), 10);

        // Apply the --column-count CSS variable dynamically
        caseStudyElement.style.setProperty("--column-count", columnCount);

        const viewContent = caseStudyElement.querySelector(".view-content");
        const viewsRows = Array.from(viewContent.querySelectorAll(".views-row"));
        const viewWidth = caseStudyElement.offsetWidth; // Get the width of the container
        const rowWidth = viewWidth / columnCount; // Calculate the width of each item based on the number of columns

        // Set the width of each item
        viewsRows.forEach(row => {
            row.style.minWidth = `${rowWidth}px`;
        });

        // Set up the view-content width dynamically based on the number of items
        viewContent.style.display = 'grid';
        viewContent.style.gridAutoFlow = 'column';
        viewContent.style.gridTemplateColumns = `repeat(${viewsRows.length}, ${rowWidth}px)`;
        viewContent.style.overflowX = 'hidden';
        viewContent.style.width = `${viewsRows.length * rowWidth}px`;
        viewContent.style.transition = 'transform 0.5s ease'; // Smooth transition for sliding

        // Create navigation arrows
        createSliderNavArrows(caseStudyElement, viewContent, viewsRows.length, columnCount, rowWidth);
    }
    
    console.log('slider done')
    
}

function handleGridLayout(caseStudyElement) {
    // Get the nrow and ncolumn classes
    const rowClass = Array.from(caseStudyElement.classList).find(cls => cls.endsWith("row"));
    const columnClass = Array.from(caseStudyElement.classList).find(cls => cls.endsWith("column"));

    let rowCount = 2; // Default values
    let columnCount = 3; // Default values

    if (rowClass) {
        rowCount = parseInt(rowClass.replace("row", ""), 10);
    }

    if (columnClass) {
        columnCount = parseInt(columnClass.replace("column", ""), 10);
    }

    // Apply the --row-count and --column-count CSS variables dynamically
    caseStudyElement.style.setProperty("--row-count", rowCount);
    caseStudyElement.style.setProperty("--column-count", columnCount);

    const viewContent = caseStudyElement.querySelector(".view-content");
    const viewsRows = viewContent.querySelectorAll(".views-row");
    const viewWidth = caseStudyElement.offsetWidth;
    const rowHeight = viewWidth / rowCount; // Assuming square items, adjust if necessary

    // Set the width and height of each item
    viewsRows.forEach(row => {
        row.style.minWidth = `${viewWidth / columnCount}px`;
        row.style.minHeight = `${rowHeight}px`;
    });

    // Configure grid layout
    viewContent.style.display = 'grid';
    viewContent.style.gridTemplateRows = `repeat(${rowCount}, 420px)`;
    viewContent.style.gridTemplateColumns = `repeat(${columnCount}, 1fr)`;
    viewContent.style.gap = '10px'; // Adjust gap as needed
}

function createSliderNavArrows(caseStudyElement, viewContent, itemCount, columnCount, rowWidth) {
    // Create navigation arrows
    const prevArrow = document.createElement('button');
    prevArrow.textContent = '◀';  // You can use an icon or any symbol you prefer
    prevArrow.className = 'slider-nav slider-prev';
    prevArrow.style.position = 'absolute';
    prevArrow.style.left = '10px';
    prevArrow.style.top = '50%';
    prevArrow.style.transform = 'translateY(-50%)';
    prevArrow.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    prevArrow.style.color = '#fff';
    prevArrow.style.border = 'none';
    prevArrow.style.borderRadius = '50%';
    prevArrow.style.width = '30px';
    prevArrow.style.height = '30px';
    prevArrow.style.cursor = 'pointer';
    prevArrow.style.zIndex = '10';

    const nextArrow = document.createElement('button');
    nextArrow.textContent = '▶';  // You can use an icon or any symbol you prefer
    nextArrow.className = 'slider-nav slider-next';
    nextArrow.style.position = 'absolute';
    nextArrow.style.right = '10px';
    nextArrow.style.top = '50%';
    nextArrow.style.transform = 'translateY(-50%)';
    nextArrow.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    nextArrow.style.color = '#fff';
    nextArrow.style.border = 'none';
    nextArrow.style.borderRadius = '50%';
    nextArrow.style.width = '30px';
    nextArrow.style.height = '30px';
    nextArrow.style.cursor = 'pointer';
    nextArrow.style.zIndex = '10';

    // Append arrows to the container
    caseStudyElement.style.position = 'relative';  // Ensure container is positioned for absolute arrows
    caseStudyElement.appendChild(prevArrow);
    caseStudyElement.appendChild(nextArrow);

    let currentIndex = 0;
    const maxIndex = itemCount - columnCount;

    // Handle arrow clicks
    prevArrow.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            viewContent.style.transform = `translateX(-${rowWidth * currentIndex}px)`;
        }
    });

    nextArrow.addEventListener('click', () => {
        if (currentIndex < maxIndex) {
            currentIndex++;
            viewContent.style.transform = `translateX(-${rowWidth * currentIndex}px)`;
        }
    });
}




document.addEventListener('DOMContentLoaded', function () {
  var activeItem = document.querySelector('.nav-link.active');

  if (activeItem) {
    var parentLi = activeItem.closest('li.menu-item');
    if (parentLi) {
      parentLi.classList.add('active');
    }
  }
});
 
$(document).ready(function(){
    
    let bannerleft = `
    <div class="banner_explore">
<div style="display: -webkit-inline-box;">
<p class="vertical-line"></p>
    <p> &nbsp;&nbsp;<a href="#our-services-section" style="color: #000000;">Explore More</a></p>

</div>
    
    </div>
    `;
    
// <p>Contact Us</p>    
// <p class="contact">
//  &nbsp;&nbsp;<img src="https://drupal.cymetrixsoft.com/sites/default/files/2024-02/Group%207.png" alt="contact icon"> 
// </p>

    let bannerright = `
    <div class="banner_contact" style="position: absolute;
    right: -1%;
    transform: rotate(-90deg);     position: fixed;
    z-index: 1000;    top: 45%;">
        <div style="display: -webkit-inline-box;background: #dfebf3;color: white;padding: 10px;border-radius: 15px;">
            <a href="#" data-toggle="modal" style="padding: 0;color:#616161;font-size: 14px;" data-target="#contactUsModal">Contact Us
            <img src="https://drupal.cymetrixsoft.com/sites/default/files/2024-02/Group%207.png" alt="contact icon" style="height: 22px;" />
            </a>
        </div>
</div>
    `;
$("#home_banner").append(bannerleft);
$('body').append(bannerright);
});





    window.addEventListener('resize', function() {
    var dropdownMenus = document.querySelectorAll('.mega-menu .nav-level-1');
    dropdownMenus.forEach(function(menu) {
        var rect = menu.getBoundingClientRect();
        var offsetRight = window.innerWidth - rect.right;
        var offsetLeft = rect.left;

        if (offsetRight < 0) {
            menu.style.left = 'auto';
            menu.style.right = '0';
        } else if (offsetLeft < 0) {
            menu.style.left = '0';
            menu.style.right = 'auto';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var dropdownMenus = document.querySelectorAll('.mega-menu .nav-level-1');
    dropdownMenus.forEach(function(menu) {
        menu.style.width = 'auto';
    });
});


document.addEventListener("DOMContentLoaded", function() {
    // Select all h2 elements
    const headers = document.querySelectorAll('h2');
    
    // Loop through each h2 element
    headers.forEach(header => {
        // Check if the next sibling is a p element
        if (header.nextElementSibling && header.nextElementSibling.tagName.toLowerCase() === 'p') {
            // Apply margin to the p element
            header.nextElementSibling.style.margin = '0px auto 35px';
        } else {
            // Apply margin to the h2 element
            header.style.margin = '0px auto 35px';
        }
    });
});








    // Get all <li> elements with the class "menu-item"
    // var liElements = document.querySelectorAll('.menu-item');

    // // Loop through each <li> element
    // liElements.forEach(function(liElement) {
    //     // Add click event listener to the current <li> element
    //     liElement.addEventListener('click', function() {
    //         // Get the <a> element inside the clicked <li>
    //         var aElement = liElement.querySelector('a');
            
    //         // Trigger click event on the <a> element
    //         aElement.click();
    //     });
    // });









(function ($) {
  $(document).ready(function () {

    $('.iconmenuFound').each(function () {
      
      var imageUrl = $(this).attr('id');
      
      var img = $('<img>').attr('src', imageUrl);
      
      $(this).prepend(img);
    });
  });
})(jQuery);


$(document).ready(function() {

 $('.navbar-nav.justify-content-end.flex-wrap.megamenu.nav-level-0 > li').each(function() {
        if ($(this).find('span.nav-link.active').length > 0) {
            $(this).addClass('active');
        }
    });

   const firstMenuItem = $('.menu-item.dropdown.mega-menu .dropdown-menu.nav-level-1 .menu-item').first();
   firstMenuItem.addClass('active');

            const $dropdownMenu = $('.dropdown-menu.nav-level-1');
            if ($dropdownMenu.length) {
                // console.log('Dropdown menu found');

                $dropdownMenu.hover(
                    function() {
                        // $(this).css('display', 'block');
                    },
                    function() {
                        $(this).removeClass('show');
                        // $(this).css('display', 'none');
                        // console.log('no');
                    }
                );

                // console.log('Event listeners attached');
            } else {
                // console.log('Dropdown menu not found');
            }
            let megaMenuFooter = `<div class="nav-bottom-content" style="
                position: absolute;
                bottom: 0;
                width: 100%;
                text-align: center;
                color: #051f3e;
                font-size: 16px;
                padding: 10px 0;
                background-color: #f5f5f5;
            ">
                <p>Supercharge your customer support with AI & Agentforce | Join the live webinar on 28th Jan 2025 | Register Now <a class=" mega-menu cymetrix_button_icon active" href="https://www.cymetrixsoft.com/webinars/supercharge-customer-support-with-ai-and-agentforce-ai-agents/"></a></p>
            </div>`;

            $('.menu-item.dropdown.mega-menu .dropdown-menu.nav-level-1').append(megaMenuFooter);
        
        
        });
        
        

$(document).ready(function() {
    // Add click event listener to the document for the dropdown menu items
    $(document).on('click', '.menu-item.dropdown.mega-menu .dropdown-item', function(event) {
        // Prevent the event from propagating to parent elements
        event.stopPropagation();

        // Check the screen width
        if ($(window).width() <= 991) {
            // Get the immediate sibling ul element
            var $dropdownMenu = $(this).next('.dropdown-menu.nav-level-2.show');

            // Close all other dropdown menus
            $('.dropdown-menu.nav-level-2.show').not($dropdownMenu).slideUp();

            // Toggle the display property of the clicked dropdown menu
            $dropdownMenu.slideToggle();
        }
    });

    // Close dropdown menus if clicking outside of the menu
    $(document).click(function() {
        if ($(window).width() <= 991) {
            $('.dropdown-menu.nav-level-2.show').slideUp();
        }
    });
});

// $(document).on('mouseenter', 'ul.dropdown-menu.nav-level-1.show > li.menu-item.dropdown.mega-menu', function(){
//     console.log()('mega menu');
// });


$(document).ready(function() {
    
    
    


    
    
    //   $(".navigation-level-2").on('mouseenter', function() {
//         $(".navigation-level-2").removeClass('active');
//         $(this).addClass('active');
        
//         var index = $(this).index() + 1; // Adding 1 to convert from zero-based index to 1-based index
//         var topPosition = -(index - 1) * 100 + "%"; 

//         $(this).find('.dropdown-menu.nav-level-2.show').css({
//             'top': topPosition,
//             'z-index': '99999999999'
//         });

//         $(".navigation-level-2:not(.active) .dropdown-menu.nav-level-2.show").css({
//             'top': '1000%',
//             'z-index': '0'
//         });
//     });
    
    


$('#navbarNav ul.dropdown-menu.nav-level-1 > li.menu-item.dropdown.mega-menu').addClass('navigation-level-2 mega-menu cymetrix_button_icon white');
$('#navbarNav ul.dropdown-menu.nav-level-1 > li.menu-item.dropdown.mega-menu.navigation-level-2.cymetrix_button_icon.white').first().addClass('active');


$(".navigation-level-2").on('mouseenter', function() {
        $(".navigation-level-2").removeClass('active');
        $(this).addClass('active');

        var totalChildren = $(this).find('.dropdown-menu.nav-level-2.show > li').length;
        
        
        
         if(totalChildren==1){
        
        
        html = `
        
        <li class="specialContactSection" style="padding: 10px 5px;flex: 0 0 calc(80% - 10px);">
            <span class="dropdown-item" aria-expanded="false" style="padding:inherit !important; opacity: 0;">Practices</span>
        <div class="extra-nav-link-wrapper" style="padding-top: 8px;">

                                            <div class="extra-link nav-call">
                                              <a href="tel:+1234567890" style="border: 3px solid #eeee;">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                +1 1234567890
                                              </a>
                                            </div>

                                            <div class="extra-link nav-mail">
                                              <a href="mailto:info@aniruddh.com" style="border: 3px solid #eeee;">
                                                <i class="fa fa-envelope-o" aria-hidden="true" style="color:red;"></i>
                                                info@aniruddh
                                              </a>
                                            </div>

                                          </div>
                                          
        </li>
        
        
        ` ; 
        
        
        $(this).find('> ul.dropdown-menu.show').append(html)
        
        
    }
    
    
    
        
        // if(totalChildren==1){
        //     $(".dropdown-menu.nav-level-1.show").css('width','35vw');
        //     $(".dropdown-menu.nav-level-1.show").css({'left': '-222%', 'important': 'true'});
        // }else if(totalChildren==2){
        //     $(".dropdown-menu.nav-level-1.show").css('width','46vw');
        //     $(".dropdown-menu.nav-level-1.show").css({'left': '-375%', 'important': 'true'});

        // }else if(totalChildren==3){
        //     $(".dropdown-menu.nav-level-1.show").css('width','65vw');
        //     $(".dropdown-menu.nav-level-1.show").css({'left': '-548%', 'important': 'true'});

        // }
        
        
        
        
        
        var childWidth = 120 * totalChildren; // Calculate width for each child li

        $(this).find('.dropdown-menu.nav-level-2.show').css('width', childWidth + "%");

      
        var index = $(this).index() + 1; // Adding 1 to convert from zero-based index to 1-based index
        var topPosition = -(index - 1) * 100 + "%"; 

        $(this).find('.dropdown-menu.nav-level-2.show').css({
            'top': topPosition,
            'z-index': '99999999999'
        });

        // Set properties for not active elements
        $(".navigation-level-2:not(.active) .dropdown-menu.nav-level-2.show").css({
            'top': '1000%',
            'z-index': '0'
        });
    });
    
$(".navigation-level-2.active").on('mouseenter', function() {
    var columnCount = $(this).find('> ul.dropdown-menu.show > li').length;
    
    if(columnCount==1){
        
        
        html = `
        
        <div class="specialContactSection">
        <div class="row">
        <div class="col-sm-12">
            teleplhone
        </div>
        </div>
        
        <div class="row">
        <div class="col-sm-12">
            email
        </div>
        </div>
        
        
        </div>
        
        
        ` ; 
        
        
        $(this).find('> ul.dropdown-menu.show').append(html)
        
        
    }

});

    
    
    
    
    

  // Function to add or remove 'show' class based on mouse hover
  function toggleShowClass(element) {
    element.addClass('show');
    element.next('ul.dropdown-menu.nav-level-1').addClass('show');
  }

  // Add hover event listeners to the navigation links
  $('.nav-link.dropdown-toggle').hover(function() {
    toggleShowClass($(this));
  }, function() {
    var $this = $(this);
    // Check if mouse is over the dropdown menu, if not, remove 'show' class
    if (!$this.next('.dropdown-menu.nav-level-1').is(':hover')) {
      $this.removeClass('show');
      $this.next('ul.dropdown-menu.nav-level-1').removeClass('show');
    }
  });

  // Add hover event listener to the dropdown menu
  $('.dropdown-menu.nav-level-1').hover(function() {
    toggleShowClass($(this).prev('.nav-link.dropdown-toggle'));
  }, function() {
    // Do nothing on mouse leave to keep the menu open
  });
});







$(document).ready(function(){
    

    
    $(".video_thumbnails2 .az-image").on('click',function(){
        var a = $(this).attr('id')
        console.log(a)
        
        $(".youtube_embed_video .ratio").html(a)
        
    })
    
    
    
    // $('.menu-toggle').click(function(){
    //     $('#navbarNav2').toggleClass('show');
    // });
});
document.querySelector('.menu-toggle').addEventListener('click', function () {
    var navbar = document.getElementById('navbarNav2');

    // Check if the 'menu-toggle' element has the 'open' class
    if (!this.classList.contains('open')) {
        this.classList.add('open'); // Add 'open' class
        navbar.classList.add('show'); // Add 'show' class to #navbarNav2
        this.setAttribute('aria-expanded', 'true'); // Update aria-expanded for accessibility
        
        console.log('mobile menu open code executed');
    } else {
        this.classList.remove('open'); // Remove 'open' class
        navbar.classList.remove('show'); // Remove 'show' class from #navbarNav2
        this.setAttribute('aria-expanded', 'false'); // Update aria-expanded for accessibility
        
        console.log('mobile menu close code executed');
    }
});


var images = document.querySelectorAll('img');
images.forEach(function(image) {
    image.classList.add('lazyload');
});

var videos = document.querySelectorAll('video');
videos.forEach(function(video) {
    video.classList.add('lazyload');
});


// document.addEventListener("DOMContentLoaded", function() {
//     // Select all img elements
//     const images = document.querySelectorAll("img");

//     images.forEach(img => {
//         // Check if the alt attribute is missing or empty
//         if (!img.hasAttribute("alt") || img.alt.trim() === "") {
//             // Extract the filename from the src attribute
//             const src = img.getAttribute("src");
//             const fileName = src.split('/').pop().split('#')[0].split('?')[0];
//             // Set the alt attribute to the filename
//             img.setAttribute("alt", fileName);
//         }
//     });
// });


// document.addEventListener("DOMContentLoaded", function() {
//   var images = document.getElementsByTagName('img');
//   for (var i = 0; i < images.length; i++) {
//     images[i].setAttribute('loading', 'lazy');
//   }
// });


// document.addEventListener("DOMContentLoaded", function() {
//   var videos = document.getElementsByTagName('video');
//   for (var i = 0; i < videos.length; i++) {
//     lazyLoadVideo(videos[i]);
//   }
// });

// function lazyLoadVideo(video) {
//   var observer = new IntersectionObserver(function(entries, observer) {
//     entries.forEach(function(entry) {
//       if (entry.isIntersecting) {
//         video.src = video.dataset.src;
//         observer.unobserve(video);
//       }
//     });
//   });

//   observer.observe(video);
// }




// Wait for the DOM content to be loaded
document.addEventListener("DOMContentLoaded", function() {
    // Select all menu items with dropdowns
    var menuItems = document.querySelectorAll('.menu-item.dropdown');

    // Iterate through each menu item
    menuItems.forEach(function(menuItem) {
        // Check if the menu item has child menu items above nav-level-1
        var hasMegaMenu = menuItem.querySelector('.nav-level-2, .nav-level-3');

        // If child menu items above nav-level-1 exist, add the class mega-menu
        if (hasMegaMenu) {
            menuItem.classList.add('mega-menu');
            // cymetrix_button_icon white
            // menuItem.classList.add('mega-menu', 'cymetrix_button_icon', 'white');

        }
    });
});



window.addEventListener('DOMContentLoaded', () => {
      // Get all cards
      const cards = document.querySelectorAll('.salesforce_harnessing_section');

      
      // Function to toggle the shrink class for a card
      function toggleShrinkClass() {
        // Loop through each card
        cards.forEach(card => {
          const cardRect = card.getBoundingClientRect(); // Get the bounding rectangle of the card
          const cardTop = (cardRect.top + window.scrollY)-100; // Calculate the top position relative to the viewport
          const offset = cardRect.height * 0.15; // Use 15% of the card height as the offset

          if (cardTop <= window.scrollY + offset) {
            card.classList.add('shrink');
          } else {
            card.classList.remove('shrink');
          }
        });
      }

      // Add event listener to window scroll
      window.addEventListener('scroll', toggleShrinkClass);

      // Call toggleShrinkClass initially to handle initial scroll position
      toggleShrinkClass();
    });



// document.addEventListener("DOMContentLoaded", function() {
//     var editableElements = document.querySelectorAll('[contenteditable="true"]');
//     editableElements.forEach(function(element) {
//         element.contentEditable = "false";
//     });
// });

// Select all elements with both classes .accordion-item and .collapse.show
const collapsibleItems = document.querySelectorAll('.accordion-item>.collapse.show');

// Loop through each collapsible item
collapsibleItems.forEach(item => {
    const parentElement = item.closest('.accordion-item');
    
    // Check if the parent element exists and if the child still has both classes
    if (parentElement && item.classList.contains('collapse') && item.classList.contains('show')) {
        // Add the desired styles to the parent element
        parentElement.style.borderTop = '4px solid #1B7EC1';
        parentElement.style.borderBottom = '4px solid #1B7EC1';
    } else if (parentElement) {
        // Remove the styles if the child doesn't have both classes
        parentElement.style.borderTop = '';
        parentElement.style.borderBottom = '';
    }
});




const dropdownMenus = document.querySelectorAll('.dropdown-menu[class*="nav-level-"]');
dropdownMenus.forEach(menu => {
    if (!menu.classList.contains('nav-level-1')) {
        menu.classList.add('show');
    }
});

document.addEventListener("DOMContentLoaded", function() {
    var pElements = document.querySelectorAll("p");
    pElements.forEach(function(element) {
        if (element.innerHTML === "&nbsp;") {
            element.remove();
        }
    });
});


$(document).ready(function(){
    $(".dropdown-menu.show.nav-level-1").removeClass("show");
});

document.addEventListener("DOMContentLoaded", function() {
    var dropdownMenus = document.querySelectorAll("ul.dropdown-menu:not(.nav-level-0)");
    dropdownMenus.forEach(function(menu) {
        var menuItems = menu.querySelectorAll("li > a");
        menuItems.forEach(function(item) {
            item.removeAttribute("data-bs-toggle");
        });
    });
});






// $(document).ready(function() {
//     var pollingInterval = 100; // Milliseconds
//     var maxAttempts = 50; // Maximum number of attempts
//     var attempts = 0;

//     var checkElementRendered = function() {
//         var videoElement = $('#custom-video video');
//         var azImage = $('.video_thumbnails2 .owl-item .az-image');
        
//         if (videoElement.length > 0 && azImage.length > 0) {
//             clearInterval(polling);
//             $('.video_thumbnails2 .owl-item').click(function() {
//                 var id = $(this).find('.az-image').attr('id');
//                 console.log(id);
//                 $('#custom-video video').attr('src', id);
//             });
//         } else {
//             attempts++;
//             if (attempts >= maxAttempts) {
//                 clearInterval(polling);
//                 console.log("Maximum attempts reached. Element not found.");
//             }
//         }
//     };

//     var polling = setInterval(checkElementRendered, pollingInterval);
// });

document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('.contactForm');
    var inputs = form.querySelectorAll('input[type="text"],input[type="email"], textarea');
    inputs.forEach(function(input) {
        input.classList.add('form-control');
    });
    var submitButtons = form.querySelectorAll('input[type="submit"], button[type="submit"]');
    
    // Loop through each submit button and add the 'cymetrix_conatct_button' class
    submitButtons.forEach(function(button) {
        button.classList.add('cymetrix_button_icon');
        button.classList.add('custom_button');
    });
    
    
    
    
    var form2 = document.querySelector('.JobForm');
    var inputs = form2.querySelectorAll('input[type="text"],input[type="email"], textarea,input[type="tel"],input[type="file"]');
    inputs.forEach(function(input) {
        input.classList.add('form-control');
    });
    var submitButtons = form2.querySelectorAll('input[type="submit"], button[type="submit"]');
    
    // Loop through each submit button and add the 'cymetrix_conatct_button' class
    submitButtons.forEach(function(button) {
        button.classList.add('cymetrix_button_icon');
        button.classList.add('custom_button');
    });
    
    
    
    
});


$(document).ready(function() {
  var header = $("#web_nav");
  var sticky = header.offset().top;

  $(window).scroll(function() {
    if (window.pageYOffset > sticky) {
      header.addClass("sticky");
    } else {
      header.removeClass("sticky");
    }
  });
});

function updatePrevButton() {
    var prevButton = document.querySelector(".discover_more .owl-controls .owl-prev");
    if (prevButton) {
        prevButton.innerHTML = ' &larr;';
        clearInterval(intervalId); // Stop checking once the element is found and updated
    }
}
var intervalId = setInterval(updatePrevButton, 100);

function updateNextButton() {
    var nextButton = document.querySelector(".discover_more .owl-controls .owl-next");    
    if (nextButton) {
            nextButton.innerHTML = ' &larr;';
            clearInterval(intervalId2); // Stop checking once the element is found and updated
        }
}
var intervalId2 = setInterval(updateNextButton, 100);

// Function to handle the removal of 'container' class
function adjustBannerContainer() {
    var divInsideBanner = document.querySelector('#home_banner > div');
    
    // Check if divInsideBanner exists
    if (divInsideBanner) {
        if (window.innerWidth < 767) {
            divInsideBanner.classList.remove('container');
        } else {
            divInsideBanner.classList.add('container');
        }
    }
}

// Function to check the URL and execute the adjustBannerContainer function
function checkURLAndAdjustBanner() {
    // Get the current URL path
    var path = window.location.pathname;
    
    // Execute the adjustBannerContainer function only if the URL is '/' or '/home'
    if (path === '/' || path === '/home') {
        adjustBannerContainer();
        
        // Attach event listeners to window resize and load events
        window.addEventListener('resize', adjustBannerContainer);
        window.addEventListener('load', adjustBannerContainer);
    }
}

// Initial execution of the checkURLAndAdjustBanner function when the script loads
checkURLAndAdjustBanner();




// 	function createCustomCursor() {
// var cursorElement = document.createElement('div');
// cursorElement.className = 'cursorCircle';
// document.body.appendChild(cursorElement);

// return cursorElement;
// }

// function updateCursorPosition(cursorElement, e) {
// var x = e.clientX;
// var y = e.clientY;

// setTimeout(function () {
// cursorElement.style.left = x + 'px';
// cursorElement.style.top = y + 'px';
// }, 300);
// }

// var customCursor = createCustomCursor();

// document.addEventListener('mousemove', function (e) {
// updateCursorPosition(customCursor, e);
// });



			let timer, activeLoop;
			let сurrentId = 3;
			const getKeyByValue = (obj, value) =>
			Object.keys(obj).find(key => obj[key] === value);
			let model = {
				emea: "EMEApopUP",
				amerika: "amerikaPopUP",
				uk: "UKpopUP",
				asia: "ASIApopUP"
			};
			$(".st2").on("click", e => {
				сurrentId = сurrentId +1;
				let popUpCountry = $(e.target).attr("id");
				let selector = "#" + model[popUpCountry];
				togglePopUp($(selector));
			});

			function togglePopUp(selector, isClicked) {
				clearInterval(timer);
				clearInterval(activeLoop);
				$("#parentsvg")
				.find("g.active")
				.removeClass("active")
				.addClass("popupWrapper");
				$("#parentsvg")
				.find(".preActive")
				.removeClass("preActive");
				$("#" + getKeyByValue(model, selector.attr("id"))).addClass("preActive");
				timer = setTimeout(function() {
					selector.removeClass("popupWrapper").addClass("active");
					$("#" + getKeyByValue(model, selector.attr("id"))).removeClass("preActive");
				}, 1000);
				activeLoop = setTimeout(function() {
					selector.removeClass("active").addClass("popupWrapper");
					loop();
				}, 5000);
			}





//  {#<script type="x-shader/x-vertex" id="vertexshader">#}
//  {#       attribute float scale;#}
//  {#       void main() {#}
//  {#           vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );#}
//  {#           gl_PointSize = scale * ( 300.0 / - mvPosition.z );#}
//  {#           gl_Position = projectionMatrix * mvPosition;#}
//  {#       }#}
//  {#   #}

//     {#<script type="x-shader/x-fragment" id="fragmentshader">#}
//     {#    uniform vec3 color;#}
//     {#    void main() {#}
//     {#        if ( length( gl_PointCoord - vec2( 0.5, 0.5 ) ) > 0.475 ) discard;#}
//     {#        gl_FragColor = vec4( color, 1.0 );#}
//     {#    }#}
//     {##}

//     {#<script type="importmap">#}
//     {#    {#}
//     {#        "imports": {#}
//     {#            "three": "https://threejs.org/build/three.module.js",#}
//     {#            "three/addons/": "./jsm/"#}
//     {#        }#}
//     {#    }#}
//     {##}



//         import * as THREE from 'three';

//         import Stats from 'https://threejs.org/examples/jsm/libs/stats.module.js';

//         const SEPARATION = 200, AMOUNTX = 90, AMOUNTY = 60;

//         let wave_container, stats;
//         let camera, scene, renderer;

//         let particles, count = 0;

//         let mouseX = 0, mouseY = 1400;

//         let windowHalfX = 800 / 2;
//         let windowHalfY = 800 / 2;

//         init();
//         animate();

//         function init() {


//                         wave_container = document.getElementById('wave_container');
//             // camera = new THREE.PerspectiveCamera(65, 800 / 400, 1, 10000);
//             // camera.position.z = 2000;
//             		camera = new THREE.PerspectiveCamera(10000, 800 / 400, 1, 10000);
// 		camera.position.z=2000;




//             scene = new THREE.Scene();

//             const numParticles = AMOUNTX * AMOUNTY;

//             const positions = new Float32Array(numParticles * 3);
//             const scales = new Float32Array(numParticles);

//             let i = 0, j = 0;

//             for (let ix = 0; ix < AMOUNTX; ix++) {
//                 for (let iy = 0; iy < AMOUNTY; iy++) {
//                     positions[i] = ix * SEPARATION - ((AMOUNTX * SEPARATION) / 2);
//                     positions[i + 1] = 0;
//                     positions[i + 2] = iy * SEPARATION - ((AMOUNTY * SEPARATION) / 2);

//                     scales[j] = 1;

//                     i += 3;
//                     j++;
//                 }
//             }

//             const geometry = new THREE.BufferGeometry();
//             geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
//             geometry.setAttribute('scale', new THREE.BufferAttribute(scales, 1));

//             const material = new THREE.ShaderMaterial({
//                 uniforms: {
//                     color: { value: new THREE.Color('#000000') },
//                 },
//                 vertexShader: document.getElementById('vertexshader').textContent,
//                 fragmentShader: document.getElementById('fragmentshader').textContent
//             });

//             particles = new THREE.Points(geometry, material);
//             scene.add(particles);

//             renderer = new THREE.WebGLRenderer({ antialias: true });
//             renderer.setPixelRatio(window.devicePixelRatio);
//             renderer.setSize(800, 400);
//             wave_container.appendChild(renderer.domElement);

//             // stats = new Stats();
//             // wave_container.appendChild(stats.dom);

//             // wave_container.style.touchAction = 'none';
//             // wave_container.addEventListener('pointermove', onPointerMove);

//             window.addEventListener('resize', onWindowResize);
//         }

//         function onWindowResize() {
//             windowHalfX = 800 / 2;
//             windowHalfY = 400 / 2;

//             camera.aspect = 800 / 400;
//             camera.updateProjectionMatrix();

//             renderer.setSize(800, 400);
//         }

//         function onPointerMove(event) {
//             if (event.isPrimary === false) return;
//             mouseX = 0;
//             mouseY = 1400;
//         }

//         function animate() {
//             requestAnimationFrame(animate);
//             render();
//             // stats.update();
//         }

//         function render() {
//             camera.position.x += (mouseX - camera.position.x) * 0.05;
//             camera.position.y += (-mouseY - camera.position.y) * 0.05;
//             camera.lookAt(scene.position);

//             const positions = particles.geometry.attributes.position.array;
//             const scales = particles.geometry.attributes.scale.array;

//             let i = 0, j = 0;

//             for (let ix = 0; ix < AMOUNTX; ix++) {
//                 for (let iy = 0; iy < AMOUNTY; iy++) {
//                     positions[i + 1] = (Math.sin((ix + count) * 0.3) * 50) +
//                         (Math.sin((iy + count) * 0.5) * 50);

//                     scales[j] = (Math.sin((ix + count) * 0.3) + 1) * 20 +
//                         (Math.sin((iy + count) * 0.5) + 1) * 20;

//                     i += 3;
//                     j++;
//                 }
//             }

//             particles.geometry.attributes.position.needsUpdate = true;
//             // particles.geometry.attributes.scale.needsUpdate = true;
//     renderer.setClearColor(new THREE.Color('rgba(255,255,255,0.1)')); // Replace '#yourColorHere' with your desired color code

//             renderer.render(scene, camera);

//             count += 0.03;
//         }


// function startCounter(elements, duration) {
//     elements.forEach(element => {
//         const initialText = element.innerText; // "155+"
//         const initial = parseFloat(initialText); // Extract the numeric part, e.g., 155
//         const targetValue = initial;
//         let current = 1;
//         const totalFrames = duration / 10;
//         const increment = (targetValue - current) / totalFrames;
//         const interval = setInterval(() => {
//             current += increment;
//             if (current >= targetValue) {
//                 element.innerText = targetValue + initialText.replace(/^\d+/, ''); // Replace the numeric part with the final value
//                 clearInterval(interval);
//             } else {
//                 element.innerText = Math.round(current) + initialText.replace(/^\d+/, ''); // Update only the numeric part
//             }
//         }, 10);
//     });
// }

// Usage: Assume this function is triggered on a specific event like window scroll, etc.
// Example HTML element
// document.addEventListener('DOMContentLoaded', () => {
//     const counters = document.querySelectorAll('.counter');
//     // Start counter when a specific condition or event occurs
//     // For instance, you can tie this to 'scroll' or 'visibility' changes
//     startCounter(counters, 2000); // Assuming you want to run it for 2000 milliseconds
// });



// function startCounter(elements, duration) {
//     elements.forEach(element => {
//       const initialText = element.innerText;
//       const initial = parseFloat(initialText);
//       const targetValue = initial;
//       let current = 1;
//       const totalFrames = duration / 10;
//       const increment = (targetValue - current) / totalFrames;

//       const interval = setInterval(() => {
//         current += increment;
//         element.innerText = Math.round(current) + initialText.replace(/^¥d+/, '');
//         if (current >= targetValue) {
//           element.innerText = targetValue + initialText.replace(/^¥d+/, '');
//           clearInterval(interval);
//         }
//       }, 10);
//     });
//   }

//   document.addEventListener('DOMContentLoaded', function () {
//     const counters = document.querySelectorAll('.counter');
//     const azElement = document.querySelector('.states-statistics');

//     let animationStarted = false;
// if(azElement){
 
//     window.addEventListener('scroll', function () {
//       const rect = azElement.getBoundingClientRect();

//       if (rect.top <= window.innerHeight && rect.bottom >= 0) {
//         if (!animationStarted) {
//           startCounter(counters, 1500);
//           animationStarted = true;
//         }
//       } else {
//         // Reset animation flag when the section goes out of view
//         animationStarted = false;
//       }
//     });   
// }
//   });


  



 document.addEventListener('DOMContentLoaded', function () {
     



    const animatedParagraphs = document.querySelectorAll('.animated-paragraph');

    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.5,
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateElements(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    animatedParagraphs.forEach(animatedParagraph => {
      observer.observe(animatedParagraph);
    });

    function iterateTextNodes(parentNode, callback) {
      parentNode.childNodes.forEach(node => {
        if (node.nodeType === 3) {
          callback(node);
        } else if (node.nodeType === 1 && node.nodeName !== 'SCRIPT') {
          iterateTextNodes(node, callback);
        }
      });
    }

    function animateTextNodes(parentNode) {
      iterateTextNodes(parentNode, textNode => {
        const words = textNode.nodeValue.split(' ');
        const newContent = words.map(word => `<span class="fade-in">${word}</span>`).join(' ');
        const wrapper = document.createElement('span');
        wrapper.innerHTML = newContent;
        textNode.replaceWith(wrapper);
      });
    }

    function animateElements(animatedParagraph) {
      const elementsToAnimate = animatedParagraph.querySelectorAll('h1, h2, h3, h4, h5, h6');

      elementsToAnimate.forEach(element => {
        animateTextNodes(element);
      });

      const spans = animatedParagraph.querySelectorAll('.fade-in');

      spans.forEach((span, index) => {
        setTimeout(() => {
          span.classList.add('active');
        }, index * 10); // Adjust the delay as needed
      });

      const svgContainer = animatedParagraph.querySelector('.svg-container');

      if (svgContainer) {
        const svg = svgContainer.querySelector('svg');
        svgContainer.innerHTML = '<span class="fade-in active"></span>'; // Replace the SVG with span
      }
    }
  });
  

// const video = document.querySelector('.az-video-content');
// let playPauseButton; // Define playPauseButton variable globally

// if (video) {
//     $("#custom-video").append(
//         `
//         <div id="play-pause-btn" style="display: block;">
//             <i class="az-icon-content glyphicon glyphicon-play-circle fa-2x" data-azcnt="true"></i>
//         </div>
//         `
//     );

//     playPauseButton = document.getElementById('play-pause-btn'); // Assign value to playPauseButton

//     // Event listener for play/pause button
//     playPauseButton.addEventListener('click', togglePlayPause);

//     // Event listener for video click to toggle play/pause
//     video.addEventListener('click', togglePlayPause);

//     // Event listener to hide controls on play
//     video.addEventListener('play', () => {
//         playPauseButton.style.display = 'none';
//     });

//     // Event listener to show controls on pause
//     video.addEventListener('pause', () => {
//         playPauseButton.style.display = 'block';
//     });

//     // Play the video for 1 second when loaded
//     video.addEventListener('loadedmetadata', () => {
//         video.play();
//         setTimeout(() => {
//             video.pause();
//             video.currentTime = 0; // Reset to the beginning
//             playPauseButton.style.display = 'block'; // Show play/pause button
//             playPauseButton.src = '/sites/default/files/2024-02/Play.png'; // Reset button icon to play
//         }, 1000); // Play for 1 second
//     });

//     var childElement = document.querySelector('.custom-controls');

//     // Check if the child element exists
//     if (childElement) {
//         // Get the parent element
//         var parentElement = childElement.parentElement;

//         parentElement.style.position = 'absolute';
//         parentElement.style.zIndex = '1';
//         parentElement.style.top = '20%';
//         parentElement.style.left = '50%';
//         parentElement.style.transform = 'translate(-50%, -50%)';
//     }
// }

// // Function to toggle play/pause
// function togglePlayPause() {
//     if (video.paused || video.ended) {
//         video.play();
//         playPauseButton.src = '/sites/default/files/2024-02/Pause.png'; // Update to pause icon
//     } else {
//         video.pause();
//         playPauseButton.src = '/sites/default/files/2024-02/Play.png'; // Update to play icon
//     }
// }
    
    
   

document.addEventListener('DOMContentLoaded', function() {

const carousel = document.querySelector('.carousel');
if (carousel) {
// Create the "previous" button
const previousButton = document.createElement('button');
previousButton.className = 'carousel-button carousel-button-prev';
previousButton.innerHTML = '&#10094;'; // Previous arrow symbol

// Create the "next" button
const thisnextButton = document.createElement('button');
thisnextButton.className = 'carousel-button carousel-button-next';
thisnextButton.innerHTML = '&#10095;'; // Next arrow symbol

// Append both buttons to the carousel element
carousel.appendChild(previousButton);
carousel.appendChild(thisnextButton);



        const track = document.querySelector('.carousel-track');
        // const previousButton = document.querySelector('.carousel-button-prev');
        // const thisnextButton = document.querySelector('.carousel-button-next');

        let currentSlide = 0;
        const slidesToShow = 3;
        const totalSlides = document.querySelectorAll('.carousel-item').length;
        const slideWidth = 100 / slidesToShow;

        // Function to move the slider
        function moveToSlide(slideIndex) {
            const percentage = -slideIndex * slideWidth;
            track.style.transform = `translateX(${percentage}%)`;
        }

        thisnextButton.addEventListener('click', () => {
            if (currentSlide < totalSlides - slidesToShow) {
                currentSlide++;
            } else {
                currentSlide = 0;
            }
            moveToSlide(currentSlide);
        });

        previousButton.addEventListener('click', () => {
            if (currentSlide > 0) {
                currentSlide--;
            } else {
                currentSlide = totalSlides - slidesToShow;
            }
            moveToSlide(currentSlide);
        });
        
}

});

const iframe = document.querySelector('.az-video iframe');

// If iframe is not found, exit gracefully
if (!iframe) {
  console.log('Iframe not found.');
} else {
  // Create a placeholder image (replace with your desired image)
  const placeholderImage = document.createElement('img');
  placeholderImage.src = 'path/to/your/placeholder.jpg'; // Adjust the path

  // Replace the iframe with the placeholder image
  iframe.parentNode.replaceChild(placeholderImage, iframe);

  // Observe the placeholder image for intersection with the viewport
  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
      // Load the iframe when it enters the viewport
      loadIframe();
      observer.unobserve(placeholderImage);
    }
  });

  observer.observe(placeholderImage);

  function loadIframe() {
    // Replace the placeholder image with the iframe
    placeholderImage.parentNode.replaceChild(iframe, placeholderImage);

    // Trigger the YouTube API to load the player
    iframe.contentWindow.postMessage('{"event":"command","target":"player","data":{"command":"playVideo"}}', '*');
  }
}



// // Select all the list items you want to make clickable
// document.querySelectorAll('.menu-item').forEach(function (item) {
//     item.addEventListener('click', function () {
//         // Find the link inside the clicked list item
//         var link = item.querySelector('a');
//         if (link) {
//             // Trigger the link's navigation
//             window.location.href = link.href;
//         }
//     });
// });

// // Optional: Prevent clicking the link from triggering the event twice
// document.querySelectorAll('.menu-item a').forEach(function (link) {
//     link.addEventListener('click', function (e) {
//         e.stopPropagation(); // Stop the event from propagating up to the <li> element
//     });
// });

   
   
   
   
    


  document.addEventListener('DOMContentLoaded', function() {
    var video = document.querySelector('.az-video-content');
    var section = document.querySelector('#home_banner');

    // Check if the video element and section exist
    if (!video || !section) {
      console.error("Error: Video or section element not found on the homepage.");
      return;
    }

    // Function to remove background image once the video can start playing
    function handleVideoCanPlay() {
      // Remove the background image
      section.style.backgroundImage = 'none';
    }

    // Listen for the canplay event, which ensures that enough data is loaded to play the video
    video.addEventListener('canplay', handleVideoCanPlay);

    // If there's an error loading the video
    video.addEventListener('error', function() {
      console.error("Error: Video failed to load.");
    });

    // Fallback if the 'canplay' event takes too long
    video.addEventListener('timeupdate', function() {
      if (video.currentTime > 0) {
        handleVideoCanPlay(); // Ensure background is removed when video starts playing
      }
    });
  });
