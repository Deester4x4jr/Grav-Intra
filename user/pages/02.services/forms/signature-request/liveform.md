---
title: 'Email Signature Form'
external_links:
    process: true
    title: false
    no_follow: true
    mode: active
    target: _blank
imports:
    - live.yaml
    - hidden.yaml
anchors:
    active: false
routes:
    aliases:
        - /email-sig
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
            name: cta
            label: 'Link Styles'
            type: radio
            help: 'Select the link style you would like to use'
            options:
                img: 'Full Pictures'
                txt: 'Bulleted List'
        -
            name: links
            label: 'Call to Action links'
            type: select
            limit: 3
            multiple: true
            help: 'Please choose up to 3'
            options:
                link_1: 'Company Story'
                link_2: 'Request a Demo'
                link_3: 'Request Pricing'
                link_4: 'Gartner MQs'
                link_5: 'Storage Survey'
                link_6: 'Case Studies'
                link_7: 'Flash Storage Primer'
                link_8: 'Gorilla Guide for SQL'
        -
            name: sig_logo
            label: 'Display the Logo?'
            type: checkbox
            help: 'Select this option if you would like the logo to be in your signature'
        -
            name: client
            type: spacer
            title: 'Choose your email client'
    buttons:
        -
            type: button
            value: Gmail
            classes: 'normal doModal'
            target: gmail
        -
            type: button
            value: 'Apple Mail'
            classes: 'good doModal'
            target: apple_mail
        -
            type: button
            value: Thunderbird
            classes: 'soso doModal'
            target: thunderbird
        -
            type: button
            value: 'Microsoft Outlook'
            classes: 'bad doModal'
            target: outlook
---

<div style="display: none;">
{% for fid,cont in page.header.imports.hidden %}
    <div id='{{ fid  }}'>{{ cont }}</div>
{% endfor %}
</div>

<div class="centered" style="margin-bottom: 5rem;">
    <h4>Thanks for using the form!</h4>
    <p>When you are finished feel free to close this window</p>
    <p><span style="font-size: 10px; color: rgba(0,209,192,1);">Coded with <i class="fa fa-glass"></i> by <i class="fa fa-github-alt"></i></span></p>
</div>
---