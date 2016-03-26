---
title: 'Video Production Request'
external_links:
    process: true
    title: false
    no_follow: true
    mode: active
    target: _blank
routes:
    aliases:
        - /video-production-request
form:
    name: video-request-form
    style: aligned
    fields:
        -
            name: section_1
            type: spacer
            title: 'User Details'
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
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
            title: 'Task Details'
        -
            name: title
            type: text
            label: 'Task Name'
            placeholder: '5 words maximum'
        -
            name: description
            label: Description
            placeholder: "Please provide as much detail as you like to describe the request.\nFeel free to include links to examples.  You can upload images below."
            type: textarea
            help: 'Please add links to sample images that you would like referenced or used for inspiration'
            validate:
                required: true
        -
            name: samples
            label: 'Sample Images'
            type: file
            destination: user/data/tmp/
            accept:
                - 'image/*'
        -
            name: priority
            label: Priority
            type: radio
            options:
                priority_high: 'High Priority'
                priority_medium: 'Medium Priority'
                priority_low: 'Low Priority'
        -
            name: due_date
            label: 'Target Date'
            type: date
        -
            name: default_tags
            label: Tags
            type: hidden
            default: 'video,content,marketing'
    buttons:
        -
            type: submit
            value: Submit
            classes: good
        -
            type: reset
            value: Reset
            classes: bad
    process:
        -
            email:
                from: { mail: '{{ form.value.email }}', name: '{{ form.value.name }}' }
                to: { mail: 18731.EETUG9zvuf3JYy8rCBux@inbox.breeze.pm }
                subject: '{{ form.value.title|e }}'
                body: '{% include ''forms/breeze.email.twig'' %}'
                attachments: [samples, stuffs]
        -
            save:
                fileprefix: video-production-request-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            display: /formsuccess
---

