
function linkOpener()
{
	var i=0;
	while(myLinks.length>i)
	{
 		if (myLinks.length-i>1)
		{
			window.open(myLinks[i]);
		}
		else
		{
			window.location=myLinks[i];
		}
		i++;
	}
}
