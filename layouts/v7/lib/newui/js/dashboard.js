document.addEventListener('DOMContentLoaded', function() {
    // Buttons
    const refreshBtn = document.querySelector('.refresh-btn');
    const cancelBtn = document.querySelector('.cancel-btn');
    const addWidgetBtn = document.querySelector('.add-widget');
  
    // Expandable Menus
    const expandableMenus = document.querySelectorAll('.expandable');
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');



  
    // Expandable Sidebar Menus
    expandableMenus.forEach(menu => {
      menu.addEventListener('click', function(e) {
        if (e.target.closest('.sub-menu')) {
          return;
        }
  
        const subMenu = this.querySelector('.sub-menu');
        if (subMenu) {
          subMenu.style.display = (subMenu.style.display === 'block') ? 'none' : 'block';
        }
      });
    });
  
    // Dropdown at Bottom ("More Resources")
    if (dropdownToggle) {
      dropdownToggle.addEventListener('click', function() {
		  
			if (dropdownMenu.style.display === 'block') {
			  dropdownMenu.style.display = 'none';
			  
			  var sidebar = this.querySelector('.sidebar');
			  $(".sidebar").removeClass("overflowy");
			  this.querySelector('.dropdown-icon').textContent = '▼ More resources';
			} else {
			  dropdownMenu.style.display = 'block';
			  this.querySelector('.dropdown-icon').textContent = '▲ More resources';
			  $(".sidebar").addClass("overflowy");
			}
      });
    }
	
  });
  // Get the main menu item and submenu
const menuItem = document.getElementById('menuItem');
const submenu = document.getElementById('submenu');

// When mouse enters the menu item, show submenu
menuItem.addEventListener('mouseenter', () => {
  submenu.style.display = 'block';
});

// When mouse leaves the menu item, hide submenu
menuItem.addEventListener('mouseleave', () => {
  submenu.style.display = 'none';
});

  