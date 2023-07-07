<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla | Features | Land Claiming</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.3.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script async defer type="module">
      import '/assets/javascript/jquery-3.6.3.min.js';
      document.getElementById('nav-features').setAttribute('class','active');
    </script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(/assets/images/claiming-title.webp); background-position: 50% 45%;">
        <div>
          <h1>Land Claiming</h1>
          <h2>By GriefPrevention</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section>
            <h3>Overview</h3>
            <p>Land can be claimed in Survival using GriefPrevention. GriefPrevetion lets you select any rectangular area to protect. Claims automatically extend up to Y 320, and will extend downward as you build. Anything within a claimed area - builds, chests, villagers, animals, and more - is protected.</p>
            <p>Claim owners can control access to their land in several ways. There are different types of trust that you can give players to allow them complete access, only access to chests, or only access to use buttons/levers (access trust). Claims can also be divided into "subdivisions" to control access to specific parts of a claim.</p>
          </section>
          <section>
            <h3>Trusting Others</h3>
            <p>Trusting players is at-your-own-risk! Claim owners have control over who can access their claim and what they can do (containertrust, accesstrust, permissiontrust, and full trust). It is up to you to give people appropriate access, and 
make sure you only trust people you know. We are not responsible for players abusing their trust to take your stuff or grief your claim.</p>
            <p>To grant someone access to a specific part of your claim, use subdivisions. You can divide your claim into subdivisions by using subdivision mode (hold a golden shovel and run <strong>/subdivideclaims</strong>). Creating subdivisions works exactly the same as creating regular claims. You are essentially creating mini-claims within your claim that you can use to grant people access to only specific areas.</p>
            <p style="color: var(--confirm);">By default, subdivisions inherit the same permissions as their parent (if someone was trusted to your main claim, they will be trusted within all your subdivisions too). To disable this, use <strong>/restrictsubclaim</strong>.</p>
          </section>
          <!-- <section class="center">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4636767855327079" crossorigin="anonymous"></script>
            <ins class="adsbygoogle"
              style="display:block; width:100%;"
              data-ad-client="ca-pub-4636767855327079"
              data-ad-slot="1425607558"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </section> -->
          <section>
            <h3>Limits</h3>
            <p>New players will start with 1000 "claim blocks". Each "claim block" allows you to add 1 block to your claim size (only counting length and width - remember claims dont count height!).</p>
            <p>You will earn an additional 100 claim blocks for every hour of play time, up to a maximum of 100000 claim blocks.</p>
            <p>You can purchase more claim blocks in the <a href="https://semivanilla.tebex.io/">donation store</a>. Premium ranks come with bonus claim blocks, up to a maximum of 500,000 bonus claim blocks. These stack on top of your accrued claim blocks from playtime. <a href="https://semivanilla.tebex.io/category/ranks">Click here to learn more</a>.</p>
            <p>You can create up to 3 separate claims by default (premium ranks can also increase this limit). Your "claim blocks" limit is shared between all of your claims.</p>
          </section>
        </div>
        <div>
         <section>
            <h3>Creating a Claim</h3>
            <p>To claim land, you will need a golden shovel, and, optionally, a stick. You can craft these items yourself or do <strong>/claim</strong> to receive them for free. The shovel is used for modifying claims and the stick is used for viewing claim information.</p>
            <p>All claims are rectangular. Determine what size/shape rectangle you need to claim to protect your entire build. Then, use the golden shovel to right click two opposite corners of that rectangle. This will create a claim. You can visualize the claim by looking at the glowstone and gold blocks that are temporarily placed to outline the claim.</p>
            <p>To resize a claim, use the golden shovel to right click one of the corners (represented by glowstone) and then right click a new location you want that corner to be.</p>
            <p style="color: var(--confirm);">Remember, claims automatically extend vertically! You only need to worry about the length/width of the claim, not the height.</p>
            <img src="/assets/images/claiming-border.webp" alt="Glowstone blocks and gold blocks creating a visual border around a claim in-game" style="border-radius: 5px;"></img>
          </section>
          <section>
            <h3>Automatic Claim Delection</h3>
            <p>If a claim owner has not accrued 25,000 claim blocks, and is offline for 30 days, the claim will be deleted. After this, the land is free-game to be reused or raided by anyone. Players witH 25,000 accrued claim blocks or higher are immune from claim deletion.</p>
          </section>
          <section>
            <h3>Useful Commands</h3>
            <ul>
              <li><strong>/unclaim</strong> - Delete a claim</li>
              <li><strong>/containertrust &lt;player&gt;</strong> - Allow someone to access your chests</li>
              <li><strong>/permissiontrust &lt;player&gt;</strong> - Allow someone to trust/untrust others</li>
              <li><strong>/accesstrust &lt;player&gt;</strong> - Allow someone to access your doors and redstone</li>
              <li><strong>/trust &lt;player&gt;</strong> - Allow someone to build and access your chests</li>
              <li><strong>/untrust &lt;player&gt;</strong> - Remove someones access</li>
              <li><strong>/trustlist</strong> - See all players you trusted</li>
              <li><strong>/setspawn</strong> - Set claim spawn point</li>
              <li><strong>/claims</strong> - Open claim teleportation GUI</li>
              <li><strong>/rename</strong> - Set your claim's name (for the GUI menu)</li>
              <li><strong>/public</strong> - Toggle whether your claim is public for teleporting</li>
              <li><strong>/subdivideclaim</strong> - Enable subdivision mode</li>
              <li><strong>/restrictsubclaim</strong> - Disable subdivision inheriting parent permissions</li>
            </ul>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
