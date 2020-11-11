(function(){
	function _(el){ return document.querySelector(el); }

	_("#add_s").onclick = function(){
		 _(".delete-container").classList.toggle("active");
		_(".open_delete").classList.toggle("active");
	}
	_(".add-season").onclick = function(){
		_(".delete-container").classList.toggle("active");
	   _(".open_delete").classList.toggle("active");
   }
//    	SUBSCRIPTIONS
_("#subscribe").onclick = function(){
	_(".subscribe-container").classList.toggle("active");
	_(".subscribe-content").classList.toggle("active");
}
   _("#sub-btn").onclick = function(){
		   _(".subscribe-container").classList.toggle("active");
		   _(".subscribe-content").classList.toggle("active");
   }
})();