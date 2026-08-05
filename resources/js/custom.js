import $ from 'jquery';

$(document).ready(function () {
    // adding bank accounts
    const ICONS = {
        bank: '<img class="w-24 h-24" src="images/bank.svg")" alt="Bank icon">',
        brokerage: '<img class="w-24 h-24" src="images/brokerage.svg")" alt="Brokerage icon">',
        stock: '<img class="w-24 h-24" src="images/company-stock.svg")" alt="Stock icon">',
        retirement: '<img class="w-24 h-24" src="images/retirement.svg")" alt="Retirement icon">',
        realestate: '<img class="w-24 h-24" src="images/real-estate.svg")" alt="Real Estate icon">',
        insurance: '<img class="w-24 h-24" src="images/insurance.svg")" alt="Insurance icon">',
        college: '<img class="w-24 h-24" src="images/clg-savings.svg")" alt="collegae Savings icon">',
        other: '<img class="w-24 h-24" src="images/other-assets.svg")" alt="Others icon">'
    };

    const OPTIONS = [
        { id: "bank", title: "Bank Accounts", subtitle: "Savings, CDs, Checking", icon: "bank" },
        { id: "brokerage", title: "Brokerage Accounts", subtitle: "Investments, Bonds, ETFs", icon: "brokerage" },
        { id: "stock", title: "Company Stock / Option", subtitle: "RSUs, Stock Options, ESPP", icon: "stock" },
        { id: "retirement", title: "Retirement Accounts", subtitle: "401(k), IRA, Roth, Pension", icon: "retirement" },
        { id: "realestate", title: "Real Estate", subtitle: "Primary home, Rentals, Vacation", icon: "realestate" },
        { id: "insurance", title: "Insurance", subtitle: "Life, Disability, Long term care", icon: "insurance" },
        { id: "college", title: "College Savings", subtitle: "529 Plans, UGMA/UTMA", icon: "college" },
        { id: "other", title: "Other Assets", subtitle: "Trusts, crypto, collectibles etc", icon: "other" },
    ];

    const selected = new Set();
    const assetContent = {
        bank: { title: "Bank Account", subtitle: "Checking, savings and cash accounts", badge: "B" },
        brokerage: { title: "Brokerage Account", subtitle: "Investments, bonds and ETFs", badge: "BR" },
        stock: { title: "Company Stock", subtitle: "RSUs, stock options and ESPP", badge: "S" },
        retirement: { title: "Retirement Account", subtitle: "401(k), IRA and pension", badge: "R" },
        realestate: { title: "Real Estate", subtitle: "Primary home or rental property", badge: "RE" },
        insurance: { title: "Insurance", subtitle: "Life and disability coverage", badge: "I" },
        college: { title: "College Savings", subtitle: "529 plans and education savings", badge: "C" },
        other: { title: "Other Assets", subtitle: "Trusts, crypto and collectibles", badge: "O" }
    };

    function showModal(modalId) {
        $('.modal-overlay').addClass('hidden').removeClass('open');
        $(`#${modalId}`).removeClass('hidden').addClass('open');
    }

    function hideAllModal() {
        $('.modal-overlay').addClass('hidden').removeClass('open');
    }

    function render() {
        const $list = $("#optionList");
        $list.empty();

        $.each(OPTIONS, function (i, opt) {
            const isSelected = selected.has(opt.id);

            const $option = $("<button>", {
                type: "button",
                class: "option" + (isSelected ? " selected" : ""),
                "aria-pressed": isSelected,
                "data-id": opt.id
            }).html(`
                <span class="icon-circle">${ICONS[opt.icon]}</span>
                <span class="text">
                <span class="title">${opt.title}</span>
                <span class="subtitle">${opt.subtitle}</span>
                </span>
                <span class="check">
                <img class="w-24 h-24" src="images/completed-check.svg")" alt="completed icon">
                </span>
            `);

            $list.append($option);
        });

        $("#step1ContinueBtn").prop("disabled", selected.size === 0);
        renderStep2();
    }

    function renderStep2() {
        const $list = $("#assetConnectionList");
        $list.empty();

        const selectedAssets = Array.from(selected);

        if (selectedAssets.length === 0) {
            $("#step2Title").text("Connect your accounts");
            $("#step2Subtitle").text("Securely connect your accounts to replace estimates with real-time data. This usually takes 2 mins");
            return;
        }

        const primaryAsset = selectedAssets[0];
        const primaryConfig = assetContent[primaryAsset] || assetContent.other;

        $("#step2Title").text(selectedAssets.length === 1 ? `Connect your ${primaryConfig.title.toLowerCase()}` : "Connect your selected accounts");
        $("#step2Subtitle").text(selectedAssets.length === 1 ? `Add your ${primaryConfig.title.toLowerCase()} details to continue.` : "Add the selected account details to continue.");

        selectedAssets.forEach(function (assetId) {
            const config = assetContent[assetId] || assetContent.other;
            const $card = $(`
                <div class="p-16-24 border-secondary-dark-20 br-8 d-flex justify-space-between gap-10 align-center bg-white" data-asset-id="${assetId}">
                    <div class="d-flex gap-12 align-center">
                        <div class="w-44 h-44 d-flex align-center bg-white justify-center br-6 border-secondary-dark-20">
                            <div class="f-14 inter bold clr-1170D1">${config.badge}</div>
                        </div>
                        <div class="d-flex flex-col gap-4">
                            <h5 class="f-16 clr-003049"><b>${config.title}</b></h5>
                            <p class="f-14 clr-356674">${config.subtitle}</p>
                        </div>
                    </div>
                    <button type="button" class="d-flex gap-4 align-center f-14 clr-003049 p-9-18 border-2-003049 br-20 bg-transparent cursor-pointer" data-modal-target="modalBankSearch">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                            <path d="M3.37926 9.0483V-0.00284159H5.66761V9.0483H3.37926ZM-0.00213066 5.6669V3.37855H9.04901V5.6669H-0.00213066Z" fill="#003049" />
                        </svg>
                        <b>Add</b>
                    </button>
                </div>
            `);

            $list.append($card);
        });
    }

    function setActiveStep(stepClass) {
        $(".setup-step").removeClass("active").hide();
        $("." + stepClass).addClass("active").show();
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function showPdfExtractionStep() {
        setActiveStep('step-2b2');
    }

    function showExtractionResult(data) {
        $('#detected-institution-name').val(data.institution);
        $('#detected-as-of-date').val(data.as_of_date);
        $('#detected-institution-type').val(data.institution_type);
        $('#detected-website').val(data.website || '');

        const $list = $('#detectedAccountsList');
        $list.empty();
        data.accounts.forEach(function (account) {
            $list.append(`
                <div class="p-16 d-flex gap-10 align-center br-8 bg-white border-secondary-dark-20 justify-space-between bank-account-item" data-account-id="${account.id}">
                    <div class="d-flex flex-col gap-4">
                        <h5 class="f-16 lh-20 clr-003049 bold">${account.name}</h5>
                        <p class="f-14 lh-14 clr-356674">Current balance: ${account.balance}</p>
                    </div>
                    <div class="btn-outer">
                        <a href="#" class="d-flex remove-account"><img class="w-32 h-32" src="images/RemoveBtn.svg" alt="Remove icon"></a>
                    </div>
                </div>
            `);
        });

        $('#importAccountsBtn').text(`Import ${data.accounts.length} Account${data.accounts.length === 1 ? '' : 's'}`);
        $('#detectedAccountsTitle').text(`Accounts Detected ${data.accounts.length}`);
        setActiveStep('step-2b3');
    }

    function showExtractionError(message) {
        alert(message || 'Unable to parse PDF. Please try again.');
        setActiveStep('step-2b1');
    }

    $(document).on("click", ".remove-account", function () {
        $(this).closest('.bank-account-item').remove();
        const remainingAccounts = $('#detectedAccountsList .bank-account-item').length;
        $('#detectedAccountsTitle').text(`Accounts Detected ${remainingAccounts}`);
        $('#importAccountsBtn').text(`Import ${remainingAccounts} Account${remainingAccounts === 1 ? '' : 's'}`);
    });

    $(document).on("click", ".option", function () {
        const id = $(this).data("id");
        selected.has(id) ? selected.delete(id) : selected.add(id);
        render();
    });

    $("#step1ContinueBtn").on("click", function () {
        if (selected.size > 0) {
            renderStep2();
            setActiveStep("step-2");
        }
    });

    $(".enterManuallyBtn").on("click", function () {
        $(".step-2, .step-2b").removeClass("active").hide();
        $(".step-2b1").addClass("active").show();
    });

    $("#ManuallyConfigureDetails").on("click", function () {
        $(".step-2b1").removeClass("active").hide();
        $(".step-2b4").addClass("active").show();
    });

    $("#step2ContinueBtn").on("click", function () {
        $(".step-2").removeClass("active").hide();
        $(".step-2b6").addClass("active").show();
    });

    $(document).on('click', '#modalBankSearch .bank-inner', function (e) {
        e.preventDefault();
        showModal('modalConnecting');

        window.setTimeout(function () {
            showModal('modalCredentials');
        }, 2000);
    });

    $(document).on('click', '#modalSelectAccounts #addAccountsBtn', function (e) {
        e.preventDefault();
        showModal('modalSuccess');

        window.setTimeout(function () {
            hideAllModal();
            // $(".step-2").removeClass("active").hide();
            // $(".step-2b").addClass("active").show();
        }, 2000);
    });

    $(document).on('click', '#signInBtn', function (e) {
        e.preventDefault();
        showModal('modalSelectAccounts');
    });

    $('#fileInput').on('change', function () {
        const file = this.files[0];
        if (!file) {
            return;
        }

        if (file.type !== 'application/pdf') {
            alert('Please upload a valid PDF document.');
            return;
        }

        const formData = new FormData();
        formData.append('pdf', file);

        showPdfExtractionStep();

        $.ajax({
            url: '/setup/extract',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                showExtractionResult(response);
            },
            error: function (xhr) {
                const message = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Unable to parse PDF. Please try again.';
                showExtractionError(message);
            }
        });
    });

    $(document).on('click', '#uploadAnotherBtn', function (e) {
        e.preventDefault();
        $('#fileInput').val('');
        setActiveStep('step-2b1');
    });

    $(document).on('click', '#importAccountsBtn', function (e) {
        // e.preventDefault();
        setActiveStep('step-2b6');
    });
    $(document).on('click', '#addAccountsBtn', function (e) {
        e.preventDefault();
        showModal('modalSuccess');
    });

    $(function () {
        render();
        setActiveStep("step-1");
    });

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



    // ===========================
    // Sidebar toggle
    // ===========================
    $(function () {

        const $sections = $('.nav-section');

        // guard: only run if the sidebar markup is present on this page
        if ($sections.length) {
            $sections.removeClass('open').find('.nav-items').css('max-height', '0px');

            var $first = $sections.first();
            openSection($first);
        }

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
            if (!$items.length) return;
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
            if (!$items.length) return;

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




    $(document).on('click', function (e) {
        const $target = $(e.target);

        // 1. Handle Opening Modals
        const $openTrigger = $target.closest('[data-modal-target]');
        if ($openTrigger.length) {
            e.preventDefault();
            const modalId = $openTrigger.data('modal-target'); // gets value of data-modal-target
            showModal(modalId);
        }

        // 2. Handle Closing Modals (Close button click)
        const $closeTrigger = $target.closest('[data-modal-close]');
        if ($closeTrigger.length) {
            e.preventDefault();
            $closeTrigger.closest('.modal-overlay').addClass('hidden').removeClass('open');
        }

        // 3. Close Modal on Dark Backdrop Click
        if ($target.hasClass('modal-overlay')) {
            e.preventDefault();
            $target.addClass('hidden').removeClass('open');
        }
    });

    // Close top-most modal when ESC key is pressed
    $(document).on('keydown', function (e) {
        if (e.key === 'Escape') {
            const $visibleModals = $('.modal-overlay:not(.hidden)');
            if ($visibleModals.length > 0) {
                // Closes the last opened modal in the DOM stack
                $visibleModals.last().addClass('hidden');
            }
        }
    });

});