<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/javascript"></script>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div id="app">
      <!--      <header>
              <button @click="show = !show">
                <i class="ion-navicon"></i>
              </button>
            </header>-->
      <main>
        <transition name="slide">
          <aside v-show="show" style="background-color:green">
          </aside>
        </transition>
        <div class="vis" style="background-color:blue" :class="{ 'vis-transition': show }" @click="show = !show"></div>
      <article style="background-color:violet" :class="{ 'shrink-transition': show }">dasasd</article>
    </main>
  </div>
  <script src="js/script.js" type="text/javascript"></script>

</body>
</html>