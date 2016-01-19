---
title: 'Email Signature Form'
imports:
    - 'live.yaml'
form:
    name: email-signature-form
    style: aligned
    fields:
        -
            name: section_1
            type: spacer
            title: 'Required Information'
        -
            name: name
            label: Name
            placeholder: 'Enter your full name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: title
            type: text
            label: 'Job Title'
            placeholder: '5 words maximum'
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                required: true
        -
            name: spacer_1
            type: spacer
            underline: true
        -
            name: section_2
            type: spacer
            title: 'Optional Information'
            help: 'Please use the following format: 000.000.0000 or +00(00)0000.0000'
        -
            name: desk_phone
            label: Office Number
            type: phone
        -
            name: cell_phone
            label: Mobile
            type: phone
        -
            name: spacer_2
            type: spacer
            underline: true
        -
            name: section_3
            type: spacer
            title: 'Extras'
        -
            name: cards
            label: Link Styles
            type: radio
            help: 'Select the link style you would like to use'
            options:
                img: 'Full Pictures'
                txt: 'Bulleted List'
        -
            name: logo
            label: Display the Logo?
            type: checkbox
            help: 'Select this option if you would like the logo to be in your signature'
    # buttons:
    #     -
    #         type: submit
    #         value: Submit
    #     -
    #         type: reset
    #         value: Reset
    # process:
    #     -
    #         email:
    #             from: { mail: '{{ form.value.email }}', name: '{{ form.value.name }}' }
    #             to: { mail: 25429.EETUG9zvuf3JYy8rCBux@inbox.breeze.pm }
    #             subject: '{{ form.value.title|e }}'
    #             body: '{% include ''forms/breeze.email.twig'' %}'
    #             attachments: [samples, stuffs]
    #     -
    #         save:
    #             fileprefix: website-request-
    #             dateformat: Ymd-His-u
    #             extension: txt
    #             body: '{% include ''forms/data.txt.twig'' %}'
    #     -
    #         display: /forms/thankyou
---

# {{ page.title }}

---