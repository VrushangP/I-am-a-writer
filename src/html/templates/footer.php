<?php
function generateFooter($pageType)
{
    $footer = sprintf('
    <footer class="footer has-background-info-dark">
    <div class="container is-max-widescreen">
        <div class="columns">
        <div class="column has-text-white-ter">
            <p class="subtitle is-6 has-text-white-ter">Contact Me</p>
            <a href="#">Email: vrushang.patel@gmail.com</a><br>
            <a href="#">Phone: +1 (647) 510-2172</a>
        </div>
        <div class="column has-text-white-ter">
            <p class="subtitle is-6 has-text-white-ter">More Work</p>
            <p href="#">Email: vrushang.patel@gmail.com</p>
            <p href="#">Phone: +1 (647) 510-2172</p>
        </div>
        <div class="column has-text-white-ter">
            <p class="subtitle is-6 has-text-white-ter">Blog</p>
            <p href="#">Email: vrushang.patel@gmail.com</p>
            <p href="#">Phone: +1 (647) 510-2172</p>
        </div>
        <div class="column has-text-white-ter">
            <p class="subtitle is-6 has-text-white-ter">Project Hub</p>
            <a href="#" class="button is-link is-outlined">LinkedIn</a>
            <p href="#">Email: vrushang.patel@gmail.com</p>
            <p href="#">Phone: +1 (647) 510-2172</p>
        </div>
        </div>
    </div>
    </footer>
    </html>');
    return $footer;
};
