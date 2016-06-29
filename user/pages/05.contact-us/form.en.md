---
title: 'Contact Us'
form:
    name: contact-us
    fields:
        -
            name: name
            label: Name
            for: nm1
            placeholder: 'Insert your name'
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
            placeholder: 'Insert your email'
            type: email
            id: em1
            validate:
                required: true
        -
            name: Message
            label: Message
            for: txt1
            placeholder: 'Leave your message here'
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
            alt: 'Send Message'
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