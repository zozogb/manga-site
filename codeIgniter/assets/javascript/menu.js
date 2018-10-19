function cacher(id)
		{
			if(document.getElementById(id).style.visibility=="hidden") // si la balise avec id "id" est cacher alors on l'affiche
   			{
      			document.getElementById(id).style.visibility="visible";
    		}
    		else // sinon on la cache
    		{
        		document.getElementById(id).style.visibility="hidden";
    		}
		}