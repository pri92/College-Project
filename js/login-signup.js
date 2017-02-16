var login=document.getElementById('loginnn');
		var signup=document.getElementById('signuppp');
		var loginclick=document.getElementById('lifirst');
		var signupclick=document.getElementById('lisecond');
		function clickedlogin(){
			login.style.display = 'block';
			signup.style.display = 'none';
			loginclick.setAttribute('style','background-color:#FFF;border-bottom: 2px solid #FFF;');			
			signupclick.setAttribute('style','background:rgba(191, 181, 181, 0.33);border-bottom: 2px solid #000;');
		}
		function clickedsignup(){
			login.style.display = 'none';
			signup.style.display = 'block';		
			signupclick.setAttribute('style','background-color:#FFF ; border-bottom: 2px solid #FFF;');			
			loginclick.setAttribute('style','background:rgba(191, 181, 181, 0.33) ; border-bottom: 2px solid #000;');
		}