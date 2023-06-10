
<style src ="../js/animation.js"></style>
<div class="MainSection">
        <div class="leftSide">
            <div class="mainText">
                <h1>Discover Your </h1>
                <h1>Deam Fashion</h1>
                <p>Embrace Your Beauty and Showcase Your Style</p>
            </div>
            <div>
                <button class="shopnowBtn" onclick="location_to()">Shop Now</button>
            </div>
        </div>
        <div class="mainImg">
            <img src="assets/main2.png" alt="MainImgage" height="900px">
        </div>
    </div>

    <div class="saleBanner">
        <h2>Unlock Your Style Journey</h2>
        <h2><span>50% off</span> Your Fashion Starter!</h2>
        <button class="SaleBannerBtn" onclick="Location_to_register()">Get It Now</button>
    </div>
    <script>
        function location_to(){
            location.replace('shop.php');
        }
        function Location_to_register(){
            location.replace('register.php');
        }
    </script>