<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla | Vote</title>
    <meta name="description" content="Vote for the SemiVanilla Minecraft server! Earn in-game rewards and support your favorite server. Best Minecraft survival server!" />
    <meta property="og:description" content="Vote for the SemiVanilla Minecraft server! Earn in-game rewards and support your favorite server. Best Minecraft survival server!" />
    <meta name="twitter:description" content="Vote for the SemiVanilla Minecraft server! Earn in-game rewards and support your favorite server. Best Minecraft survival server!" />
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.3.min.js"></script>
    <script async src="/assets/javascript/button_clicked.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script async defer type="module">
      import '/assets/javascript/jquery-3.6.3.min.js';
      document.getElementById('nav-vote').setAttribute('class','active');
    </script>
    <style>
      .votesection {
        z-index: 2;
      }
      h4 {
        font-weight: 100;
        font-size: 1.2em;
      }
      .content {
        margin: 80px !important;
        flex-wrap: nowrap !important;
        align-items: flex-start !important;
      }
      .votelinks {
        flex-direction: row !important;
        flex-wrap: wrap !important;
        background: rgb(19 24 36);
        border-radius: 25px;
        width: auto !important;
        margin: 0 30px 30px 30px;
        position: relative !important;
      }
      .othervotelinks div{
        width: 100% !important;
        display: flex;
        justify-content: space-between;
        text-align: left !important;
      }
      .votelinks div {
        width: 50%;
        padding: 30px;
      }
      .votelinks h3 {
        width: 100%;
        margin-bottom: 30px;
      }
      #votesection1 {
        flex-shrink: 1000;
      }
      #votesection2 {
        width: 300px;
      }
      button {
        border-radius: 8px;
      }
      @media (max-width: 1100px) {
        #votesection2 {
          width: 260px;
        }
      }
      @media (max-width: 900px) {
        .content {
          flex-wrap: wrap !important;
        }
        #votesection2 {
          width: auto !important;
        }
      }
      @media (max-width: 700px) {
        .votelinks div {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(/assets/images/vote-title.webp); background-position: 50% 45%;">
        <div>
          <h1>Vote Daily!</h1>
          <h2>Help us grow and get rewarded!</h2>
        </div>
      </div>
      <div class="content">
        <div class="shadow"></div>
        <div class="votesection" id="votesection1">
          <!-- <section class="center">
            <ins class="adsbygoogle"
              style="display:block; width:100%;"
              data-ad-client="ca-pub-4636767855327079"
              data-ad-slot="3462907091"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </section> -->
          <section style="z-index: 3;" class="center votelinks">
            <img style="position: absolute; right: -25px; bottom: -105px; width: 180px;" class="hide-mobile" src="/assets/images/sweet-berries.webp" alt="Minecraft Sweet Berries">
            <h3>Reward Sites</h3>
            <div>
              <h4>minecraftpocket-servers.com</h4>
              <a href="https://minecraftpocket-servers.com/server/122945/vote/" target="_blank"><button type="button" id="vote1" onclick="buttonClicked('vote1')">Vote!</button></a>
            </div>
            <div>
              <h4>minecraftsurvivalservers.net</h4>
              <a href="https://minecraftsurvivalservers.net/server/58/vote" target="_blank"><button type="button" id="vote2" onclick="buttonClicked('vote2')">Vote!</button></a>
            </div>
            <div>
              <h4>mc-servers.com</h4>
              <a href="https://mc-servers.com/vote/5397" target="_blank"><button type="button" id="vote3" onclick="buttonClicked('vote3')">Vote!</button></a>
            </div>
            <div>
              <h4>minecraft-server.net</h4>
              <a href="https://minecraft-server.net/vote/semivanilla_mc/" target="_blank"><button type="button" id="vote4" onclick="buttonClicked('vote4')">Vote!</button></a>
            </div>
            <div>
              <h4>serverlist101.com</h4>
              <a href="https://serverlist101.com/server/3002/vote/" target="_blank"><button type="button" id="vote5" onclick="buttonClicked('vote5')">Vote!</button></a>
            </div>
            <div>
              <h4>minecraft.buzz</h4>
              <a href="https://minecraft.buzz/vote/7264" target="_blank"><button type="button" id="vote6" onclick="buttonClicked('vote6')">Vote!</button></a>
            </div>
          </section>
          <section class="center votelinks othervotelinks">
            <h3>Other Sites</h3>
            <div>
              <h4>minecraft-serverlist.com</h4>
              <a href="https://minecraft-serverlist.com/server/473/vote" target="_blank"><button type="button" id="vote7" onclick="buttonClicked('vote7')">Vote!</button></a>
            </div>
            <div>
              <h4>planetminecraft.com</h4>
              <a href="https://www.planetminecraft.com/server/semivanilla-survival-5892339/vote/" target="_blank"><button type="button" id="vote8" onclick="buttonClicked('vote8')">Vote!</button></a>
            </div>
            <div>
              <h4>topg.org</h4>
              <a href="https://topg.org/minecraft-servers/server-653557" target="_blank"><button type="button" id="vote23" onclick="buttonClicked('vote23')">Vote!</button></a>
            </div>
            <div>
              <h4>minelist.net</h4>
              <a href="https://minelist.net/vote/4103" target="_blank"><button type="button" id="vote9" onclick="buttonClicked('vote9')">Vote!</button></a>
            </div>
            <div>
              <h4>minecraft-servers-list.org</h4>
              <a href="https://www.minecraft-servers-list.org/index.php?a=in&u=semivanilla_mc" target="_blank"><button type="button" id="vote10" onclick="buttonClicked('vote10')">Vote!</button></a>
            </div>
            <div>
              <h4>minecraft-server-list.com</h4>
              <a href="https://minecraft-server-list.com/server/495151/vote/" target="_blank"><button type="button" id="vote13" onclick="buttonClicked('vote13')">Vote!</button></a>
            </div>
            <div>
              <h4>minecraft-mp.com</h4>
              <a href="https://minecraft-mp.com/server/317314/vote/" target="_blank"><button type="button" id="vote15" onclick="buttonClicked('vote15')">Vote!</button></a>
            </div>
          </section>
          <!-- <section class="center">
            <ins class="adsbygoogle"
              style="display:block; width:100%;"
              data-ad-client="ca-pub-4636767855327079"
              data-ad-slot="1179524536"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </section> -->
        </div>
        <div class="votesection" id="votesection2">
          <section class="center">
            <h3>Rewards!</h3>
            <p>1 Vote Crate for every vote! PLUS 1 Premium Crate for voting 7 days in a row!</p>
            <p><strong>NEW!</strong> Purchase a Rank and get DOUBLE Premium Crates from voting!</p>
            <p><a target="_blank" href="https://semivanilla.tebex.io/category/ranks">Click here to see available ranks!</a></p>
          </section>
          <section class="center">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4636767855327079" crossorigin="anonymous"></script>
            <!-- SVMC-Vote-Vertical -->
            <ins class="adsbygoogle"
              style="display:block; width:100%;"
              data-ad-client="ca-pub-4636767855327079"
              data-ad-slot="3257563978"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </section>
          <section class="center">
            <h3>Reddit</h3>
            <p>We are also listed on /r/mcservers! Find our latest post to upvote and comment!</p>
            <p>Note: This site does not grant voting rewards.</p>
            <a href="https://www.reddit.com/user/sudokouuu" target="_blank"><button type="button" id="vote7" onclick="buttonClicked('vote7')">Visit Reddit</button></a>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
