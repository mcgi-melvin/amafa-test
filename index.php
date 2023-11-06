<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page with Tailwind CSS</title>

    <link rel="stylesheet" href="/assets/css/style.min.css" />
</head>
<body>

    <header class="flex items-center w-full px-5 fixed">
        <div class="flex items-center justify-between w-full">
            <div class="logo">
                <img class="w-full" src="/assets/images/logo.svg" alt="Site Logo" />
            </div>
            <div class="menu">
                <nav class="hidden sm:block">
                    <ul class="m-0 p-0">
                        <li class="inline-block"><a href="/#about">About</a></li>
                        <li class="inline-block"><a href="/#features">Features</a></li>
                        <li class="inline-block"><a href="/#contact">Contact</a></li>
                    </ul>
                </nav>
                <a class="sm:hidden block" href="javascript:void(0)"><i class="fa-solid fa-bars"></i></a>
            </div>
        </div>
    </header>

    <main>
        <?php if( hero_contents() ): ?>
        <section id="hero">
            <?php foreach ( hero_contents() as $content ): ?>
            <div class="hero-item bg-cover bg-no-repeat !flex items-center justify-center relative px-5" style="background-image: url(<?= get_image( $content['background_image'] ) ?>)">
                <div class="container mx-auto text-center relative">
                    <div class="item-content">
                        <h1 class="text-white font-bold"><?= $content['title'] ?></h1>
                        <div class="text-white description mt-5">
                            <?= $content['description'] ?>
                        </div>
                        <?php if( $content['buttons'] ): ?>
                            <div class="button-container flex flex-wrap items-center justify-center gap-3 mt-7">
                                <?php foreach ( $content['buttons'] as $i => $button ):
                                    $btn_class = "peach-outline";
                                    if( $i % 2 !== 0 ) $btn_class = "orange"
                                    ?>
                                    <a class="button <?= $btn_class ?>" href="<?= $button['url'] ?>"><?= $button['title'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </section>
        <?php endif; ?>

        <?php if( about_contents() ): ?>
        <section id="about">
            <div class="content-wrapper">
                <?php foreach ( about_contents() as $i => $content ):
                    $bg = "bg-orange";
                    $text_position = "right";
                    $text_order = "xl:order-1 order-2";
                    $image_order = "xl:order-2 order-1";
                    if( $i % 2 !== 0 ) {
                        $bg = "bg-peach";
                        $text_position = "left";
                        $text_order = "order-2";
                        $image_order = "order-1";
                    }
                    ?>
                <div class="flex xl:flex-nowrap flex-wrap">
                    <div class="column-text xl:w-1/2 w-full <?= $bg ?> <?= $text_order ?> <?= $text_position ?>">
                        <div>
                            <h6 class="sub-heading mb-5"><?= $content['sub_heading'] ?></h6>
                            <h3 class="font-bold"><?= $content['heading'] ?></h3>
                            <div class="description mt-5">
                                <?= $content['description'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="column-image bg-cover bg-no-repeat xl:w-1/2 w-full <?= $image_order ?>" style="background-image: url(<?= get_image( $content['image'] ) ?>)"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

        <?php if( features_contents() ): ?>
        <section id="features" class="bg-cover bg-no-repeat bg-fixed">
            <div class="container mx-auto px-5">
                <div class="section-header text-center">
                    <h3 class="text-peach font-bold heading">Features</h3>
                </div>
                <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-4">
                    <?php foreach ( features_contents() as $i => $content ): ?>
                        <div class="feature-item">
                            <div class="feature-item-image mb-5">
                                <i class="fa-regular fa-circle-check text-6xl"></i>
                            </div>
                            <div class="feature-item-content">
                                <h5 class="font-bold"><?= $content['heading'] ?></h5>
                                <div class="description mt-5">
                                    <?= $content['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <section id="contact" class="relative bg-cover bg-no-repeat">
            <div class="container mx-auto px-5 relative">
                <div class="content-wrapper bg-orange">
                    <div class="flex gap-10 xl:flex-nowrap flex-wrap">
                        <div class="xl:w-1/2 w-full">
                            <h3 class="font-bold">Get in touch with us</h3>
                            <div class="description mt-10">
                                Sometimes a website can’t answer every question. If that’s the case for you, shoot us an email and let’s have a conversation.
                            </div>
                            <div class="contact mt-10">
                                <div class="contact-item flex items-center mb-5">
                                    <i class="fa-solid fa-phone mr-5"></i>
                                    <a href="tel:01 234 5678">01 234 56789</a>
                                </div>
                                <div class="contact-item flex items-center mb-5">
                                    <i class="fa-solid fa-envelope mr-5"></i>
                                    <a href="mailto:sample@email.com">sample@email.com</a>
                                </div>
                                <div class="contact-item flex items-center">
                                    <i class="fa-solid fa-map-location mr-5"></i>
                                    <p>48 Bapaume Road Mount Luke, Queensland(QLD), 4352</p>
                                </div>
                            </div>
                            <?php if( socials() ): ?>
                            <div class="social mt-10">
                                <ul>
                                    <?php foreach ( socials() as $item ): ?>
                                        <li class="inline-block"><a class="text-4xl" href="<?= $item['link'] ?>" target="_blank"><?= $item['icon'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="xl:w-1/2 w-full">
                            <form autocomplete="off" onsubmit="form_submit()">
                                <div class="form-field">
                                    <label for="name">Full Name</label>
                                    <input id="name" class="bg-gray-light w-full outline-none text-primary" name="name" placeholder="Full Name" required />
                                </div>
                                <div class="form-field">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" class="bg-gray-light w-full outline-none text-primary" name="email" placeholder="Email" required />
                                </div>
                                <div class="form-field">
                                    <label for="subject">Subject</label>
                                    <input id="subject" class="bg-gray-light w-full outline-none text-primary" name="subject" placeholder="Subject" required />
                                </div>
                                <div class="form-field">
                                    <label for="message">Message</label>
                                    <textarea id="message" class="bg-gray-light w-full outline-none text-primary" name="message" placeholder="Message" rows="8"></textarea>
                                </div>
                                <div class="form-field">
                                    <button type="submit" class="button dark-blue">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <section id="copyright" class="bg-blue-dark py-3 px-5">
            <div class="flex items-center justify-between text-white text-xs">
                <span>Copyright &copy; <?= date('Y') ?></span>
                <span>Built by Melvin</span>
            </div>
        </section>
    </footer>

    <script src="/assets/lib/amafa/js/jquery.js"></script>
    <script src="/assets/lib/fontawesome/js/all.min.js"></script>
    <script src="/assets/lib/slick/slick.min.js"></script>
    <script src="/assets/lib/amafa/js/script.js"></script>
</body>
</html>