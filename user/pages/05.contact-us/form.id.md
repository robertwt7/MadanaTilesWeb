---
title: 'Hubungi Kami'
form:
    name: contact-us
    fields:
        -
            name: name
            label: Nama
            for: nm1
            placeholder: 'Masukan Nama Anda'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            id: nm1
            validate:
                required: true
        -
            name: email
            label: Email
            for: em1
            placeholder: 'Masukan Email Anda'
            type: email
            id: em1
            validate:
                required: true
        -
            name: pesan
            label: Pesan
            for: txt1
            placeholder: 'Masukan pesan yang ingin anda tinggalkan'
            type: textarea
            id: txt1
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recatpcha_site_key: 6LeeTiMTAAAAAJKkWre6vdtIXjXnvAiko0XBg4iu
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            id: msg
            alt: 'Kirim Pesan'
            value: ' '
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Contact] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Terima kasih untuk pesan anda. Kami akan berusaha membalasnya dalam waktu 1 hari kerja.'
        -
            display: thankyou
---

# My Form