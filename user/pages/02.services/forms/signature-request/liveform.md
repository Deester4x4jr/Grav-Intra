---
title: 'Email Signature Form'
imports:
    - live.yaml
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
        -
            name: desk_phone
            label: 'Office Number'
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
            title: Extras
        -
            name: links
            label: 'CTA''s'
            type: select
            multiple: true
            limit: 3
            help: 'Please choose up to 3'
            validate:
                required: true
            options:
                link_1: 'Company Story'
                link_2: 'Request a Demo'
                link_3: 'Request Pricing'
                link_4: 'Gartner MQs'
                link_5: 'Storage Survey'
                link_6: 'Case Studies'
                link_7: 'Flash Storage Primer'
                link_8: 'Flash Storage for Dummies'
        -
            name: cta
            label: 'Link Styles'
            type: radio
            help: 'Select the link style you would like to use'
            options:
                img: 'Full Pictures'
                txt: 'Bulleted List'
                non: None
        -
            name: logo
            label: 'Display the Logo?'
            type: checkbox
            help: 'Select this option if you would like the logo to be in your signature'
---

# {{ page.title }}

---