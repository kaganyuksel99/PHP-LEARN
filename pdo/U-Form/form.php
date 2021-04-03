
    <form action="gonder.php" method="post" enctype="multipart/form-data">
        Ad: <br>
        <input type="text" name= "ad" value="tayfun erbilen"> 
        <hr>
        Hakkımda: <br> 
        <textarea name="hakkimda" id="" cols="50" rows="5"></textarea> 
        <hr>
        Meslek: <br> 
        <select name="meslek" >
            <option value="">>--- seç ---<</option>
            <option value="web-developer">Web developer</option>
            <option value="front-end-developer">Front-end developer</option>
            <option value="back-end-developer">Back-end developer</option>
        </select>
        <hr>
        <label >
        Cinsiyet: <br> 
        <input type="radio" name="cinsiyet" value="erkek">
        erkek 
        </label>
        <label >
        <input type="radio" name="cinsiyet" value="kadin">
        kadın
        </label>
        <hr>
        İlgi alanları: <br>   
        <label>
            <input type="checkbox" name="ilgi-alanlari[]" value="php"> PHP  <!-- Çoklu seçimlerde phpde dizi olarak alınamsı için kullandık -->
        </label>
        <label>
            <input type="checkbox" name="ilgi-alanlari[]" value="html"> HTML
        </label>
        <label>
            <input type="checkbox" name="ilgi-alanlari[]" value="css"> CSS
        </label>
        <hr>
        Fotoğraf: <br>
        <input type="file" name="fotograf" > 
        <hr> 
        Meslek: <br>
        <select name="meslek2[]" multiple size="5">
            <option>-- seç --</option>
            <option selected value="web-developer">Web Developer</option>
            <option selected value="front-end-developer">Front-end Developer</option>
            <option value="back-end-developer">Back-end Developer</option>
        </select> <br> <hr>
        <input type="hidden" name="submit" value="1">
        <button type="submit">Gönder</button>
    </form>

