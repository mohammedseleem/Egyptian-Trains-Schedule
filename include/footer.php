
        <script>
        	function sourceSearch()
                {
                        var sourceInp =  document.getElementById('source');
                        var div = document.getElementById('src-stations');
                        var ul = document.getElementById('src-ul-stations');
                        var stations = document.getElementsByClassName('src-station');
                        var i,check = false;
                        for(i = 0; i < stations.length; i++)
                        {
                                if(stations[i].innerHTML.indexOf(sourceInp.value) > -1 && sourceInp.value !== "")
                                {
                                        div.style.display = "block";
                                        stations[i].style.display = "block";
                                }
                                else
                                {
                                                stations[i].style.display = "none";
                                }

                        }
                        for(i = 0; i < stations.length; i++)
                        {
                                if(stations[i].style.display !== "none")
                                        {
                                                check = true;
                                                        break;
                                        }
                        }
                        if(!check)
                        {
                                div.style.display = "none";
                        }


                }

                function getValueForSource(obj)
                {

                        var sourceInp = document.getElementById('source');
                        var li = obj.textContent;
                        sourceInp.value = li;
                        document.getElementById('src-stations').style.display = 'none';

                }
                function getValueForDestination(obj)
                {

                        var destinationInp = document.getElementById('destination');
                        var li = obj.textContent;
                        destinationInp.value = li;
                        document.getElementById('dest-stations').style.display = 'none';

                }
                function destinationSearch()
                {

                        var destinationInp =  document.getElementById('destination');
                        var div = document.getElementById('dest-stations');
                        var ul = document.getElementById('dest-ul-stations');
                        var stations = document.getElementsByClassName('dest-station');
                                var i,check=false;
                        for(i = 0; i < stations.length; i++)
                        {
                                if(stations[i].innerHTML.indexOf(destinationInp.value) > -1 && destinationInp.value !== "")
                                {
                                        div.style.display = "block";
                                        stations[i].style.display = "block";
                                }
                                else
                                {
                                        stations[i].style.display = "none";
                                }
                        }
                        for(i = 0; i < stations.length; i++)
                        {
                                if(stations[i].style.display !== "none")
                                        {
                                                check = true;
                                                        break;
                                        }
                        }
                        if(!check)
                        {
                                div.style.display = "none";
                        }
                };

                function hideSourceSearchBlock()
                {
                        var div = document.getElementById('src-stations');
                        var stations = document.getElementsByClassName('src-station');
                        div.style.display = 'none';
                        var i;
                        for(i = 0; i < stations.length; i++)
                        {
                                        stations[i].style.display = 'none';
                        }
                }

                function showSourceSearchBlock()
                {
                        var div = document.getElementById('src-stations');
                        var stations = document.getElementsByClassName('src-station');
                        div.style.display = 'block';
                        var i;
                        for(i = 0; i < stations.length; i++)
                        {
                                stations[i].style.display = 'block';
                        }
                }

                function hideDestinationSearchBlock()
                {
                        var div = document.getElementById('dest-stations');
                        var stations = document.getElementsByClassName('dest-station');
                        div.style.display = 'none';
                        var i;
                        for(i = 0; i < stations.length; i++)
                        {
                                stations[i].style.display = 'none';
                        }
                }

                function showDestinationSearchBlock()
                {
                        var div = document.getElementById('dest-stations');
                        var stations = document.getElementsByClassName('dest-station');
                        div.style.display = 'block';
                        var i;
                        for(i = 0; i < stations.length; i++)
                        {
                                stations[i].style.display = 'block';
                        }
                }


                function showDegrees()
                {
                        document.getElementById('degrees').style.display = 'block';
                }
                function hideDegrees()
                {
                        document.getElementById('degrees').style.display = 'none';
                }
                function getValueForDegree(obj)
                {
                        document.getElementById('degree').value = obj.innerHTML;
                        document.getElementById('degrees').style.display = "none";
                }

        	
        </script>
        
	</body>
</html>

