import $ from 'jquery';

$(document).ready(function () {
    // toggle btn in the sidebar
    $('.sidebar-toggle').on('click', function () {
        $('body').toggleClass('sidebar-close');
    });




    // accordion on asset allocation page 

    $('.risk-card').each(function (index) {

        var $card = $(this);
        var $content = $card.find('.risk-card-content');
        var $arrow = $card.find('.risk-card-arrow');

        // First card open by default
        if (index === 0) {
            $content.show();
            $arrow.addClass('active');
        } else {
            $content.hide();
        }

        $card.find('.risk-card-header').on('click', function () {

            var isOpen = $content.is(':visible');

            // Close all cards
            $('.risk-card').each(function () {
                $(this).find('.risk-card-content').slideUp();
                $(this).find('.risk-card-arrow').removeClass('active');
            });

            // Open clicked card if it was closed
            if (!isOpen) {
                $content.slideDown();
                $arrow.addClass('active');
            }

        });

    });


    document.querySelectorAll('.password-toggle').forEach(function (button) {

        button.addEventListener('click', function () {

            const input = document.getElementById(this.dataset.target);
            const eyeShow = this.querySelector('.eye-show');
            const eyeHide = this.querySelector('.eye-hide');

            if (input.type === 'password') {
                // Show password
                input.type = 'text';

                eyeShow.style.display = 'none';
                eyeHide.style.display = 'block';

                this.setAttribute('aria-label', 'Hide password');

            } else {
                // Hide password
                input.type = 'password';

                eyeShow.style.display = 'block';
                eyeHide.style.display = 'none';

                this.setAttribute('aria-label', 'Show password');
            }
        });

    });

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // 1. Check and display Success flash message
    var successMsg = $('meta[name="flash-success"]').attr('content');
    if (successMsg) {
        toastr.success(successMsg);
    }

    // 2. Check and display Error flash message
    var errorMsg = $('meta[name="flash-error"]').attr('content');
    if (errorMsg) {
        toastr.error(errorMsg);
    }

    // 3. Check and display Validation error messages
    var validationErrors = $('meta[name="flash-errors"]').attr('content');
    if (validationErrors) {
        try {
            var errors = JSON.parse(validationErrors);
            errors.forEach(function (msg) {
                toastr.error(msg);
            });
        } catch (e) {
            console.error('Failed to parse validation errors:', e);
        }
    }



    // adding bank accounts
    const ICONS = {
        bank: '<img class="w-24 h-24" src="/images/bank.svg" alt="Bank icon">',
        brokerage: '<img class="w-24 h-24" src="/images/brokerage.svg" alt="Brokerage icon">',
        stock: '<img class="w-24 h-24" src="/images/company-stock.svg" alt="Stock icon">',
        retirement: '<img class="w-24 h-24" src="/images/retirement.svg" alt="Retirement icon">',
        realestate: '<img class="w-24 h-24" src="/images/real-estate.svg" alt="Real Estate icon">',
        insurance: '<img class="w-24 h-24" src="/images/insurance.svg" alt="Insurance icon">',
        college: '<img class="w-24 h-24" src="/images/clg-savings.svg" alt="College Savings icon">',
        other: '<img class="w-24 h-24" src="/images/other-assets.svg" alt="Others icon">'
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
                <img class="w-24 h-24" src="/images/completed-check.svg" alt="completed icon">
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
                        <a href="#" class="d-flex remove-account"><img class="w-32 h-32" src="/images/RemoveBtn.svg" alt="Remove icon"></a>
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

        var bankName = $(this).attr('data-name');
        var bankLogo = $(this).attr('data-logo');

        $('#modalCredentials .bank-name, #modalSelectAccounts .bank-name').text(bankName);
        var fullLogoUrl = bankLogo ? '/storage/' + bankLogo : '';

        if (fullLogoUrl) {
            $('#modalCredentials .bank-logo img, #modalSelectAccounts .bank-logo img').attr('src', fullLogoUrl);
            $('#modalCredentials .bank-logo, #modalSelectAccounts .bank-logo').removeClass('hidden-imp');
        } else {
            $('#modalCredentials .bank-logo, #modalSelectAccounts .bank-logo').addClass('hidden-imp');
            $('#modalCredentials .bank-name, #modalSelectAccounts .bank-name').removeClass('hidden-imp');
        }

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
        1: "Now Target",
        2: "Year 2 Target",
        3: "Year 3 Target",
        4: "Year 4 Target",
        5: "Year 5 Target"
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



    const $searchInput = $('#bankSearchInput');
    const $bankItems = $('#bankList .bank-inner');
    const $label = $('#bankListLabel');
    const $noResults = $('#noResults');

    function resetBankList() {
        $label.text('Popular');
        $noResults.hide();

        $bankItems.each(function () {
            const $item = $(this);
            // Use String() conversion to prevent null/undefined errors
            const isFeatured = String($item.attr('data-featured')) === 'true';
            if (isFeatured) {
                $item.show();
            } else {
                $item.hide();
            }
        });
    }

    resetBankList();

    $searchInput.on('input', function () {
        const query = $(this).val().toLowerCase().trim();

        if (query === '') {
            resetBankList();
        } else {
            $label.text('Search Results');
            let visibleCount = 0;

            $bankItems.each(function () {
                const $item = $(this);
                // Use .attr('data-name') instead of .data('name')
                const bankName = ($item.attr('data-name') || '').toLowerCase();

                if (bankName.includes(query)) {
                    $item.show();
                    visibleCount++;
                } else {
                    $item.hide();
                }
            });

            if (visibleCount === 0) {
                $noResults.show();
            } else {
                $noResults.hide();
            }
        }
    });

    // new worth progress bar
    document.querySelectorAll('.seg-bar').forEach(function (bar) {
        var pct = parseFloat(bar.getAttribute('data-pct'));
        var total = 20;
        var filled = pct > 0 ? Math.max(1, Math.round((pct / 100) * total)) : 0;
        var inner = bar.querySelector('.seg-inner');
        inner.innerHTML = '';
        for (var i = 0; i < total; i++) {
            var block = document.createElement('div');
            block.className = 'seg-block ' + (i < filled ? 'filled' : 'empty');
            inner.appendChild(block);
        }
    });

    // ── DATA SETS ──
    const DATASETS = {
        '1D': {
            points: [14200, 14320, 14180, 14400, 14380, 14450, 14500, 14480, 14520, 14600, 14580, 14620, 14743],
            labels: ['9AM', '10AM', '11AM', '12PM', '1PM', '2PM', '3PM', '4PM'],
            assets: '$16,125,000', liabilities: '$1,382,000',
            value: '$14,743,000', change: '+$543,000 (3.8%) today', positive: true
        },
        '1W': {
            points: [13800, 14100, 13950, 14300, 14100, 14500, 14743],
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            assets: '$16,125,000', liabilities: '$1,382,000',
            value: '$14,743,000', change: '+$943,000 (6.8%) this week', positive: true
        },
        '1M': {
            points: [13200, 13800, 13500, 14100, 13900, 14300, 14100, 14500, 14200, 14600, 14400, 14743],
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            assets: '$16,125,000', liabilities: '$1,382,000',
            value: '$14,743,000', change: '+$1,543,000 (11.7%) this month', positive: true
        },
        '3M': {
            points: [12800, 13200, 13600, 13400, 13900, 14100, 13800, 14300, 14100, 14500, 14300, 14743],
            labels: ['Mar', 'Apr', 'May'],
            assets: '$16,125,000', liabilities: '$1,382,000',
            value: '$14,743,000', change: '+$1,943,000 (15.2%) 3 months', positive: true
        },
        'YTD': {
            points: [13619, 14100, 13800, 14400, 13900, 14600, 14200, 14800, 14400, 14900, 14600, 14743],
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            assets: '$16,125,000', liabilities: '$1,382,000',
            value: '$14,743,000', change: '+$1,124,000 (8.2%) this year', positive: true
        },
        '1Y': {
            points: [
                13619, 7800, 16500, 9200, 12200, 16700,
                11800, 13000, 16800, 10500, 17000, 11200,
                14600, 11000, 16900, 10800, 14900, 13100,
                17100, 9500, 16000, 13500, 7200, 16200
            ],
            labels: ['May, 25', 'Jun, 25', 'Jul, 25', 'Aug, 25', 'Sep, 25', 'Oct, 25', 'Nov, 25', 'Dec, 25', 'Jan, 26', 'Feb, 26', 'Mar, 26', 'Apr, 26', 'May, 26'],
            assets: '$16,125,000', liabilities: '$1,382,000',
            value: '$14,743,000', change: '+$1,124,000 (8.2%) this year', positive: true
        },
        'ALL': {
            points: [
                5000, 6200, 5800, 7100, 6500, 8200, 7800, 9500,
                8900, 10200, 9800, 11500, 10800, 12400, 11900, 13200,
                12800, 14100, 13600, 14743
            ],
            labels: ['2020', '2021', '2022', '2023', '2024', '2025', '2026'],
            assets: '$16,125,000', liabilities: '$1,382,000',
            value: '$14,743,000', change: '+$9,743,000 (194.9%) all time', positive: true
        }
    };

    // hover date labels per range
    const DATE_LABELS = {
        '1D': (i, len) => {
            const hours = ['9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '4:30 PM', '5:00 PM', '5:15 PM', '5:30 PM', '5:45 PM'];
            return hours[i] || '';
        },
        '1W': (i) => ['Mon, May 19', 'Tue, May 20', 'Wed, May 21', 'Thu, May 22', 'Fri, May 23', 'Sat, May 24', 'Sun, May 25'][i] || '',
        '1M': (i) => `Day ${i + 1}, May 2026`,
        '3M': (i) => `Week ${i + 1}`,
        'YTD': (i) => ['Jan 26', 'Feb 26', 'Mar 26', 'Apr 26', 'May 26', 'Jun 26', 'Jul 26', 'Aug 26', 'Sep 26', 'Oct 26', 'Nov 26', 'Dec 26'][i] || '',
        '1Y': (i) => {
            const months = ['May 25', 'Jun 25', 'Jul 25', 'Aug 25', 'Sep 25', 'Oct 25', 'Nov 25', 'Dec 25', 'Jan 26', 'Feb 26', 'Mar 26', 'Apr 26', 'May 26', 'Jun 26', 'Jul 26', 'Aug 26', 'Sep 26', 'Oct 26', 'Nov 26', 'Dec 26', 'Jan 27', 'Feb 27', 'Mar 27', 'Apr 27'];
            return months[i] || '';
        },
        'ALL': (i) => ['Jan 2020', 'Jul 2020', 'Jan 2021', 'Jul 2021', 'Jan 2022', 'Jul 2022', 'Jan 2023', 'Jul 2023', 'Jan 2024', 'Jul 2024', 'Jan 2025', 'Jul 2025', 'Jan 2026', 'Jul 2026', 'Jan 2027', 'Jul 2027', 'Jan 2028', 'Jul 2028', 'Jan 2029', 'Jul 2029'][i] || ''
    };

    let activeRange = '1Y';
    const canvas = document.getElementById('chart');
    const ctx = canvas.getContext('2d');
    const wrap = document.getElementById('chart-wrap');
    const tooltip = document.getElementById('tooltip');
    const ttVal = document.getElementById('tt-value');
    const ttDate = document.getElementById('tt-date');
    const dot = document.getElementById('crosshair-dot');
    const xLabels = document.getElementById('x-labels');

    function fmt(n) {
        if (n >= 1000000) return '$' + (n / 1000000).toFixed(1).replace(/\.0$/, '') + 'M';
        if (n >= 1000) return '$' + Math.round(n / 1000) + 'K';
        return '$' + n;
    }

    function drawChart(range) {
        const ds = DATASETS[range];
        const pts = ds.points;
        const DPR = window.devicePixelRatio || 1;
        const W = wrap.clientWidth;
        const H = wrap.clientHeight;

        canvas.width = W * DPR;
        canvas.height = H * DPR;
        canvas.style.width = W + 'px';
        canvas.style.height = H + 'px';
        ctx.scale(DPR, DPR);

        const PAD_L = 52, PAD_R = 16, PAD_T = 16, PAD_B = 30;
        const chartW = W - PAD_L - PAD_R;
        const chartH = H - PAD_T - PAD_B;

        const minV = Math.min(...pts) * 0.92;
        const maxV = Math.max(...pts) * 1.06;

        function xPos(i) { return PAD_L + (i / (pts.length - 1)) * chartW; }
        function yPos(v) { return PAD_T + (1 - (v - minV) / (maxV - minV)) * chartH; }

        ctx.clearRect(0, 0, W, H);

        // Y grid lines + labels
        const yTicks = 5;
        ctx.textAlign = 'right';
        ctx.textBaseline = 'middle';
        ctx.font = '10px Inter, sans-serif';

        for (let t = 0; t <= yTicks; t++) {
            const v = minV + (t / yTicks) * (maxV - minV);
            const y = yPos(v);
            ctx.strokeStyle = 'rgba(255,255,255,0.04)';
            ctx.lineWidth = 1;
            ctx.beginPath();
            ctx.moveTo(PAD_L, y);
            ctx.lineTo(W - PAD_R, y);
            ctx.stroke();
            ctx.fillStyle = '#4b5563';
            ctx.fillText(fmt(v), PAD_L - 6, y);
        }

        // gradient fill
        const grad = ctx.createLinearGradient(0, PAD_T, 0, PAD_T + chartH);
        grad.addColorStop(0, 'rgba(46,204,113,0.35)');
        grad.addColorStop(0.5, 'rgba(46,204,113,0.08)');
        grad.addColorStop(1, 'rgba(46,204,113,0)');

        ctx.beginPath();
        ctx.moveTo(xPos(0), yPos(pts[0]));
        for (let i = 1; i < pts.length; i++) {
            const x0 = xPos(i - 1), y0 = yPos(pts[i - 1]);
            const x1 = xPos(i), y1 = yPos(pts[i]);
            const cpx = (x0 + x1) / 2;
            ctx.bezierCurveTo(cpx, y0, cpx, y1, x1, y1);
        }
        ctx.lineTo(xPos(pts.length - 1), PAD_T + chartH);
        ctx.lineTo(xPos(0), PAD_T + chartH);
        ctx.closePath();
        ctx.fillStyle = grad;
        ctx.fill();

        // line
        ctx.beginPath();
        ctx.moveTo(xPos(0), yPos(pts[0]));
        for (let i = 1; i < pts.length; i++) {
            const x0 = xPos(i - 1), y0 = yPos(pts[i - 1]);
            const x1 = xPos(i), y1 = yPos(pts[i]);
            const cpx = (x0 + x1) / 2;
            ctx.bezierCurveTo(cpx, y0, cpx, y1, x1, y1);
        }
        ctx.strokeStyle = '#2ecc71';
        ctx.lineWidth = 2;
        ctx.shadowColor = 'rgba(46,204,113,0.5)';
        ctx.shadowBlur = 6;
        ctx.stroke();
        ctx.shadowBlur = 0;

        // X labels
        const lbls = ds.labels;
        xLabels.innerHTML = '';
        lbls.forEach(function (l) {
            const s = document.createElement('span');
            s.textContent = l;
            xLabels.appendChild(s);
        });

        // store for hover
        canvas._pts = pts;
        canvas._xPos = xPos;
        canvas._yPos = yPos;
        canvas._minV = minV;
        canvas._maxV = maxV;
        canvas._chartW = chartW;
        canvas._chartH = chartH;
        canvas._PAD_L = PAD_L;
        canvas._PAD_R = PAD_R;
        canvas._PAD_T = PAD_T;
        canvas._PAD_B = PAD_B;
        canvas._W = W;
        canvas._H = H;
    }

    function onHover(e) {
        const pts = canvas._pts;
        if (!pts) return;

        const rect = wrap.getBoundingClientRect(); // use wrap, not canvas
        const mx = (e.clientX || (e.touches && e.touches[0].clientX)) - rect.left;

        const PAD_L = canvas._PAD_L;
        const PAD_R = canvas._PAD_R;
        const PAD_T = canvas._PAD_T;
        const chartW = canvas._chartW;
        const chartH = canvas._chartH;
        const W = canvas._W;

        if (mx < PAD_L || mx > W - PAD_R) { hideTooltip(); return; }

        const ratio = (mx - PAD_L) / chartW;
        const floatIdx = ratio * (pts.length - 1);
        const idx0 = Math.floor(floatIdx);
        const idx1 = Math.min(idx0 + 1, pts.length - 1);
        const t = floatIdx - idx0;
        const interpVal = pts[idx0] + (pts[idx1] - pts[idx0]) * t;
        const py = canvas._yPos(interpVal);
        const px = mx;

        drawChart(activeRange);

        // no ctx.save/scale here — drawChart already scaled
        ctx.setLineDash([4, 4]);
        ctx.strokeStyle = 'rgba(255,255,255,0.2)';
        ctx.lineWidth = 1;
        ctx.beginPath();
        ctx.moveTo(px, PAD_T);
        ctx.lineTo(px, PAD_T + chartH);
        ctx.stroke();
        ctx.setLineDash([]);

        dot.style.display = 'block';
        dot.style.left = px + 'px';
        dot.style.top = py + 'px';

        ttVal.textContent = fmt(interpVal * 1000);
        ttDate.textContent = DATE_LABELS[activeRange](Math.round(floatIdx), pts.length);

        tooltip.style.display = 'block';
        const tw = tooltip.offsetWidth;
        const th = tooltip.offsetHeight;
        let tx = px + 12;
        let ty = py - th / 2;
        if (tx + tw > W - 8) tx = px - tw - 12;
        if (ty < 4) ty = 4;
        tooltip.style.left = tx + 'px';
        tooltip.style.top = ty + 'px';
    }

    function hideTooltip() {
        tooltip.style.display = 'none';
        dot.style.display = 'none';
    }

    wrap.addEventListener('mousemove', onHover);
    wrap.addEventListener('mouseleave', function () { hideTooltip(); drawChart(activeRange); });
    wrap.addEventListener('touchmove', function (e) { e.preventDefault(); onHover(e); }, { passive: false });
    wrap.addEventListener('touchend', hideTooltip);

    // ── TABS ──
    document.querySelectorAll('.tab').forEach(function (tab) {
        tab.addEventListener('click', function () {
            document.querySelectorAll('.tab').forEach(function (t) { t.classList.remove('active'); });
            tab.classList.add('active');
            activeRange = tab.getAttribute('data-range');
            const ds = DATASETS[activeRange];

            document.getElementById('display-value').textContent = ds.value;
            const changeEl = document.getElementById('display-change');
            changeEl.innerHTML = ds.positive
                ? '<svg fill="none" viewBox="0 0 24 24" stroke="#2ecc71" stroke-width="2.5" style="width:14px;height:14px;"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>' + ds.change
                : '<svg fill="none" viewBox="0 0 24 24" stroke="#e74c3c" stroke-width="2.5" style="width:14px;height:14px;"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"/><polyline points="17 18 23 18 23 12"/></svg>' + ds.change;
            changeEl.style.color = ds.positive ? '#2ecc71' : '#e74c3c';

            document.getElementById('assets-value').textContent = ds.assets;
            document.getElementById('liabilities-value').textContent = ds.liabilities;

            drawChart(activeRange);
        });
    });

    // ── INIT ──
    window.addEventListener('resize', function () { drawChart(activeRange); });
    drawChart(activeRange);
});