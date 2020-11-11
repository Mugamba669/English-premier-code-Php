<?php include("top.html");?>
<img src="Images/epld.jpg"id="epld" alt="">
<div class="row-search">
    <form action="search-all.php"method="POST" onsubmit="return getImage()">
     <div class="specific">
         <p><label>Search a specific team</label></p>
        <input type="search" id="team_s" placeholder="Enter your team" name="team_s">&nbsp;&nbsp;&nbsp;
        <button type="submit">Find</button>
     </div>

    </form>

    <form action="search-specific.php"method="POST">
     <div class="search-all">
     <p><label>Season Search</label></p>
        <input type="search" id="season_s"placeholder="Enter your season" name="season_s">&nbsp;&nbsp;&nbsp;
        <button type="submit">Find</button>
     </div>
    </form>
</div>

<div class="subscribe-container">
    <div class="subscribe-content">
        <p>Leave your email for latest updates</p>
        <form action="">
        <input type="email"placeholder="examle@gmail.com" name="cust-email" id="email-id">
        <button id="sub-btn" type="submit">Subscribe</button>
        </form>
    </div>
</div>
<br>
<fieldset>
    <legend>Live Matches</legend>
<div class="update1">
    <figure>
        <img src="" id="img2">
        <p>Arsenal Vs Manchester</p>
    </figure>

    <figure>
        <img src="" id="img2">
        <p>Stoke City Vs Liverpool</p>
    </figure>

    <figure>
        <img src="" id="img2">
        <p>Chelsea Vs Bolton</p>
    </figure>
</div>
</fieldset>

<?php include("bottom.html");?>
<script src="bacon.js"></script>
</body>
</html>