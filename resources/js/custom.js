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

}); 