<?php include 'partials/header.php'; ?>
<section class="py-5" id="member-federations" id="main-content">
  <div class="container">
  <h2 style="color:#43c463;">Member Federations</h2>
    <p>UWPF unites national Pickleball federations from around the world. Directory and profiles coming soon.</p>
    <div class="row">
      <!-- Member countries with flags -->
      <?php
      $continents = [
        'Africa' => [
          ['name' => 'Egypt','iso' => 'eg','fed' => 'Egypt Pickleball Association'],
          ['name' => 'Ghana','iso' => 'gh','fed' => 'Ghana Pickleball Association'],
          ['name' => 'Nigeria','iso' => 'ng','fed' => 'Pickleball Nigeria'],
          ['name' => 'South Africa','iso' => 'za','fed' => 'Pickleball South Africa'],
          ['name' => 'Uganda','iso' => 'ug','fed' => 'Pickleball Uganda'],
        ],
        'Asia' => [
          ['name' => 'Armenia','iso' => 'am','fed' => 'Armenian Pickleball Federation'],
          ['name' => 'China','iso' => 'cn','fed' => 'China Pickleball Federation'],
          ['name' => 'Hong Kong','iso' => 'hk','fed' => 'Hong Kong Pickleball Federation'],
          ['name' => 'India','iso' => 'in','fed' => 'India Pickleball Federation'],
          ['name' => 'Indonesia','iso' => 'id','fed' => 'Indonesia Pickleball Association'],
          ['name' => 'Iran','iso' => 'ir','fed' => 'Iran National Pickleball Association'],
          ['name' => 'Iraq','iso' => 'iq','fed' => 'Iraq Pickleball Association'],
          ['name' => 'Israel','iso' => 'il','fed' => 'Israel Pickleball Association'],
          ['name' => 'Japan','iso' => 'jp','fed' => 'Pickleball Japan'],
          ['name' => 'Jordan','iso' => 'jo','fed' => 'Jordan Pickleball Club'],
          ['name' => 'Korea','iso' => 'kr','fed' => 'Korea Pickleball Association'],
          ['name' => 'Kuwait','iso' => 'kw','fed' => 'Pickleball Kuwait'],
          ['name' => 'Malaysia','iso' => 'my','fed' => 'Malaysia Pickleball Association'],
          ['name' => 'Mongolia','iso' => 'mn','fed' => 'Mongolian Pickleball Association'],
          ['name' => 'Nepal','iso' => 'np','fed' => 'Nepal Pickleball Association'],
          ['name' => 'Pakistan','iso' => 'pk','fed' => 'Pakistan Pickleball Association'],
          ['name' => 'Palestine','iso' => 'ps','fed' => 'Palestine Pickleball Association'],
          ['name' => 'Philippines','iso' => 'ph','fed' => 'Pro Pickleball Philippines'],
          ['name' => 'Singapore','iso' => 'sg','fed' => 'Singapore Pickleball Association'],
          ['name' => 'Sri Lanka','iso' => 'lk','fed' => 'Pickleball Sri Lanka'],
          ['name' => 'Thailand','iso' => 'th','fed' => 'Pickleball Thailand'],
        ],
        'Europe' => [
          ['name' => 'Austria','iso' => 'at','fed' => 'Pickleball Austria'],
          ['name' => 'Belgium','iso' => 'be','fed' => 'Pickleball Belgium'],
          ['name' => 'Bulgaria','iso' => 'bg','fed' => 'Pickleball Bulgaria'],
          ['name' => 'Czech Republic','iso' => 'cz','fed' => 'Pickleball Czech Republic'],
          ['name' => 'Denmark','iso' => 'dk','fed' => 'Danish Tennis Association'],
          ['name' => 'England','iso' => 'gb','fed' => 'Pickleball England'],
          ['name' => 'Estonia','iso' => 'ee','fed' => 'Pickleball Estonia'],
          ['name' => 'France','iso' => 'fr','fed' => 'Pickleball France'],
          ['name' => 'Georgia','iso' => 'ge','fed' => 'Georgian Pickleball Federation'],
          ['name' => 'Germany','iso' => 'de','fed' => 'German Pickleball Federation'],
          ['name' => 'Greece','iso' => 'gr','fed' => 'Pickleball Greece'],
          ['name' => 'Hungary','iso' => 'hu','fed' => 'Pickleball Hungary'],
          ['name' => 'Ireland','iso' => 'ie','fed' => 'Pickleball Ireland'],
          ['name' => 'Italy','iso' => 'it','fed' => 'Federazione Italiana Tennis e Padel'],
          ['name' => 'Luxembourg','iso' => 'lu','fed' => 'Pickleball Luxembourg'],
          ['name' => 'Netherlands','iso' => 'nl','fed' => 'Pickleball Netherlands'],
          ['name' => 'Norway','iso' => 'no','fed' => 'Pickleball Norway'],
          ['name' => 'Poland','iso' => 'pl','fed' => 'Pickleball Poland'],
          ['name' => 'Portugal','iso' => 'pt','fed' => 'Pickleball Portugal'],
          ['name' => 'Russia','iso' => 'ru','fed' => 'Pickleball Russia'],
          ['name' => 'Scotland','iso' => 'gb-sct','fed' => 'Pickleball Scotland'],
          ['name' => 'Serbia','iso' => 'rs','fed' => 'Pickleball Serbia'],
          ['name' => 'Spain','iso' => 'es','fed' => 'Pickleball Spain'],
          ['name' => 'Switzerland','iso' => 'ch','fed' => 'Pickleball Switzerland'],
        ],
        'North America' => [
          ['name' => 'Canada','iso' => 'ca','fed' => 'Pickleball Canada'],
          ['name' => 'Cayman Islands','iso' => 'ky','fed' => 'Cayman Islands Pickleball Association'],
          ['name' => 'Dominican Republic','iso' => 'do','fed' => 'Dominican Republic Pickleball'],
          ['name' => 'Guatemala','iso' => 'gt','fed' => 'Guatemala Pickleball Association'],
          ['name' => 'Mexico','iso' => 'mx','fed' => 'Pickleball Mexico'],
          ['name' => 'Panama','iso' => 'pa','fed' => 'Panama Pickleball Association'],
          ['name' => 'United States','iso' => 'us','fed' => 'USA Pickleball Federation'],
        ],
        'Oceania' => [
          ['name' => 'Australia','iso' => 'au','fed' => 'Pickleball Australia'],
          ['name' => 'New Zealand','iso' => 'nz','fed' => 'Pickleball New Zealand'],
        ],
        'South America' => [
          ['name' => 'Argentina','iso' => 'ar','fed' => 'Argentina Pickleball Federation'],
          ['name' => 'Brazil','iso' => 'br','fed' => 'Brazilian Pickleball Association'],
          ['name' => 'Peru','iso' => 'pe','fed' => 'Pickleball Peru'],
          ['name' => 'Venezuela','iso' => 've','fed' => 'Pickleball Venezuela'],
        ],
      ];
foreach ($continents as $continent => $countries) {
    usort($countries, function ($a, $b) { return strcmp($a['name'], $b['name']); });
    echo '<div class="col-12"><h3 class="mt-5 mb-3 text-success">' . htmlspecialchars($continent) . '</h3></div>';
    foreach ($countries as $country) {
        echo '<div class="col-md-4 mb-3">
            <div class="card h-100 p-3 d-flex flex-column justify-content-center align-items-center country-card" style="min-height:120px;">
              <img src="https://flagcdn.com/48x36/' . strtolower($country['iso']) . '.png" alt="' . $country['name'] . ' flag" class="mb-2 rounded shadow-sm country-flag" style="width:48px;height:36px;object-fit:cover;display:block;margin-left:auto;margin-right:auto;">
              <h5 class="card-title mb-1 text-center">' . htmlspecialchars($country['name']) . '</h5>
              <p class="card-text mb-0 text-center">' . htmlspecialchars($country['fed']) . '</p>
            </div>
          </div>';
    }
}
?>
    </div>
    <p class="mt-4">More federations will be added soon.</p>
  </div>
</section>
<?php include 'partials/footer.php'; ?>
