<!doctype html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
  </head>
  <body class="!font-helvetica">
    <header class="fixed z-10 w-full bg-ave-primary">
      <nav class="container flex items-center justify-between py-4">
        <a href="#">
          <img
            src="<?php bloginfo( 'template_url' ); ?>/assets/img/foco-horizontal.png"
            alt="Logo de SmartPass"
            width="100"
          />
        </a>
        <div class="flex items-center gap-x-4">
          <a 
          href="<?php echo get_home_url(); ?>/cart"
          >
            <img
              src="<?php bloginfo( 'template_url' ); ?>/assets/svg/cart.svg"
              alt="Ir al carrito"
            />
          </a>
            <div class="dropdown relative inline-block">
              <button
                class="inline-flex items-center rounded bg-gray-300 px-4 py-1.5 font-semibold text-gray-700"
              >
                <span class="mr-1">Funciones</span>
                <svg
                  class="h-4 w-4 fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                  />
                </svg>
              </button>
              <ul class="dropdown-menu absolute hidden pt-1 text-gray-700">
                <li class="">
                  <a
                    class="whitespace-no-wrap block rounded-t bg-gray-200 px-4 py-1.5 hover:bg-gray-400"
                    href="<?php echo get_home_url(); ?>/event/ave-uio"
                    >Quito</a
                  >
                </li>
                <li class="">
                  <a
                    class="whitespace-no-wrap block bg-gray-200 px-4 py-1.5 hover:bg-gray-400"
                    href="<?php echo get_home_url(); ?>/event/ave-lat"
                    >Latacunga</a
                  >
                </li>
                <li class="">
                  <a
                    class="whitespace-no-wrap block bg-gray-200 px-4 py-1.5 hover:bg-gray-400"
                    href="<?php echo get_home_url(); ?>/event/ave-amb"
                    >Ambato</a
                  >
                </li>
                <li class="">
                  <a
                    class="whitespace-no-wrap block rounded-b bg-gray-200 px-4 py-1.5 hover:bg-gray-400"
                    href="<?php echo get_home_url(); ?>/event/ave-rio"
                    >Riobamba</a
                  >
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </header>
  </body>
</html>
