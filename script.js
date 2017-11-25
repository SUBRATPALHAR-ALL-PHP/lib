function validate(user)
    {
	  var1 = user.idtest.value
	  var2 = user.passtest.value
	  arrarstring = var1+" "+"%"+" "+var2
      	  params  = "cal=" + arrarstring
	  request = new ajaxRequest()
      request.open("POST", "ajaxlisten.php", true)
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
      request.setRequestHeader("Content-length", params.length)
      request.setRequestHeader("Connection", "close")
	  
      request.onreadystatechange = function()
      {
	alert("ajax result receiveing....")
        if (this.readyState == 4)
          if (this.status == 200)
            if (this.responseText != null)
              alert(this.responseText)
      }
      request.send(params)
    }

function adbk(user)
    {
	  var1 = user.isbn.value
	  var2 = user.title.value
	  var3 = user.author.value
	  var4 = user.no.value
	  arrarstring = " "+var1+" "+"%"+" "+var2+" "+"%"+" "+var3+" "+"%"+" "+var4+" "
	  alert(arrarstring)
      params  = "cal=" + arrarstring
      request = new ajaxRequest()
      request.open("POST", "adbkajax.php", true)
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
      request.setRequestHeader("Content-length", params.length)
      request.setRequestHeader("Connection", "close")  
      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
          if (this.status == 200)
            if (this.responseText != null)
              alert(this.responseText)
      }
      request.send(params)	  
    }

function issuebk(user)
    {
	  var1 = user.stdid.value
	  var2 = user.bkid.value
	  arrarstring = " "+var1+" "+"%"+" "+var2+" "
      params  = "cal=" + arrarstring
      request = new ajaxRequest()
      request.open("POST", "issuebkajax.php", true)
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
      request.setRequestHeader("Content-length", params.length)
      request.setRequestHeader("Connection", "close")  
      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
          if (this.status == 200)
            if (this.responseText != null)
             alert(this.responseText)
      }
      request.send(params)
    }

function ajaxRequest()
    {
      try { var request = new XMLHttpRequest() }
      catch(e1) {
        try { request = new ActiveXObject("Msxml2.XMLHTTP") }
        catch(e2) {
          try { request = new ActiveXObject("Microsoft.XMLHTTP") }
          catch(e3) {
            request = false
      } } }
      return request
    }


/*
for changing iner html ad for stylying purpose..
function O(i) { return typeof i == 'object' ? i : document.getElementById(i) }
function S(i) { return O(i).style                                            }
function C(i) { return document.getElementsByClassName(i)                    }
*/

