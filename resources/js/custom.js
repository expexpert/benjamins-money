import $ from 'jquery';

$(document).ready(function () {

    // ===========================
    // Profile Dropdown
    // ===========================

    $("#profileToggle").on("click", function (e) {
        e.stopPropagation();
        $("#profileDropdown").toggleClass("active");
    });

    $(document).on("click", function (e) {
        if (
            !$(e.target).closest("#profileDropdown").length &&
            !$(e.target).closest("#profileToggle").length
        ) {
            $("#profileDropdown").removeClass("active");
        }
    });

    // Profile Dropdown End


    // ===========================
    // Range Slider
    // ===========================

    const labels = {
        1: "Now",
        2: "Year 2",
        3: "Year 3",
        4: "Year 4",
        5: "Year 5"
    };

    function updateTimeline() {
        $("#selectedValue").text(labels[$("#myRange").val()]);
        // $("#middleLabel").text(labels[$("#myRange").val()]);
    }

    updateTimeline();

    $("#myRange").on("input", updateTimeline);

    // Range Slider End


    // ===========================
    // IPO
    // ===========================

    $(".ipo-header").on("click", function () {
        $(".ipo-select").toggleClass("open");
    });

    $(document).on("click", function (e) {
        if (!$(e.target).closest(".ipo-select").length) {
            $(".ipo-select").removeClass("open");
        }
    });

    function renderTags() {

        $("#selectedTags").empty();

        const selected = $(".ipo-dropdown input:checked");

        $("#selectedCount").text(
            `IPO/Exit Scenario: ${selected.length} selected`
        );

        selected.each(function () {

            const chk = $(this);

            const tag = $(`
                <div class="tag f-12 d-flex gap-9 align-center">
                    <span>${chk.val()}</span>
                    <span class="remove">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                            <path d="M0.75 7.82L7.822 0.75M0.75 0.75L7.822 7.82" stroke="#23B05B" stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </span>
                </div>
            `);

            tag.find(".remove").on("click", function () {
                chk.prop("checked", false);
                renderTags();
            });

            $("#selectedTags").append(tag);

        });

        const add = $(`
            <div class="add-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path d="M0.75 5.75H10.25" stroke="#23B05B" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M5.75 10.25L5.75 0.75" stroke="#23B05B" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
        `);

        add.on("click", function () {
            $(".ipo-select").addClass("open");
        });

        $("#selectedTags").append(add);

        if (selected.length === 0) {
            $("#selectedTags").removeClass("show");
            return;
        }

        $("#selectedTags").addClass("show");
    }

    $(".ipo-dropdown input").on("change", renderTags);

    renderTags();


    // signup password field 
    window.togglePassword = function (inputId, iconEl) {
        const input = document.getElementById(inputId);
        const isHidden = input.type === 'password';
        input.type = isHidden ? 'text' : 'password';

        iconEl.innerHTML = isHidden
            ? `<svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11" fill="none">
            <path d="M10.4676 8.71762C9.47045 9.4777 8.25625 9.89879 7.0026 9.91929C2.91927 9.91929 0.585938 5.25262 0.585938 5.25262C1.31154 3.90039 2.31793 2.71897 3.5376 1.78762M5.7776 0.725952C6.17913 0.631965 6.59023 0.584983 7.0026 0.585952C11.0859 0.585952 13.4193 5.25262 13.4193 5.25262C13.0652 5.91506 12.6429 6.53871 12.1593 7.11345M8.23927 6.48929C8.07906 6.66122 7.88586 6.79913 7.67119 6.89477C7.45653 6.99042 7.2248 7.04185 6.98982 7.046C6.75485 7.05015 6.52145 7.00692 6.30354 6.91891C6.08564 6.83089 5.88769 6.69989 5.72151 6.53371C5.55534 6.36753 5.42433 6.16959 5.33632 5.95168C5.2483 5.73377 5.20508 5.50037 5.20922 5.2654C5.21337 5.03043 5.2648 4.7987 5.36045 4.58403C5.4561 4.36937 5.594 4.17616 5.76594 4.01595" stroke="#356674" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`
            : `<svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
             <path d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
             <line x1="1" y1="1" x2="23" y2="23"></line>
           </svg>`;
    };



    // sidebar toggle 
    $(function () {

        $('.nav-section').removeClass('open').find('.nav-items').css('max-height', '0px');

        var $first = $('.nav-section').first();
        openSection($first);

        $('.nav-header').on('click', function () {
            var $section = $(this).closest('.nav-section');
            var isOpen = $section.hasClass('open');

            $('.nav-section.open').each(function () {
                closeSection($(this));
            });

            if (!isOpen) {
                openSection($section);
            }
        });

        function openSection($section) {
            var $items = $section.find('.nav-items');

            $items.css('transition', 'none');
            $section.addClass('open');            
            var target = $items[0].scrollHeight;   
            $items.css('max-height', '0px');       
            $items[0].offsetHeight;               
            $items.css('transition', '');          

            requestAnimationFrame(function () {
                $items.css('max-height', target + 'px');
            });

            $items.one('transitionend', function (e) {
                if (e.originalEvent.propertyName === 'max-height' && $section.hasClass('open')) {
                    $items.css('max-height', 'none');
                }
            });
        }

        function closeSection($section) {
            var $items = $section.find('.nav-items');
            $items.css('max-height', $items[0].scrollHeight + 'px'); 
            $section.removeClass('open');
            requestAnimationFrame(function () {
                $items.css('max-height', '0px');
            });
        }

        $('.nav-item').on('click', function (e) {
            e.stopPropagation();
            $('.nav-item').removeClass('active');
            $(this).addClass('active');
        });

    });
});