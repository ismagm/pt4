<%
    Function formulari
        Dim nom
        Dim cognom

        nom = Request.Form("nom")
        cognom = Request.Form("cognom")
        
        Response.Write("Hola " & nom & " " & cognom)
    end function

    formulari()
%>