---
title: 'Form Test'
form:
    name: graphic-design-request-form
    fields:
        - name: section_1
          type: spacer
          title: User Details

        - name: name
          label: Name
          placeholder: 'Enter your name'
          autofocus: 'on'
          autocomplete: 'on'
          type: text
          validate:
            required: true

        - name: email
          label: Email
          placeholder: 'Enter your email address'
          type: email
          validate:
            required: true

        - name: spacer_1
          type: spacer
          underline: true

        - name: section_2
          type: spacer
          title: Task Details

        - name: title
          type: text
          label: Task Name
          placeholder: 5 words maximum

        - name: description
          label: Description
          placeholder: "Please provide as much detail as you like to describe the request.\nFeel free to include links to examples.  You can upload images below."
          type: textarea
          validate:
            required: true

        - name: samples
          label: Sample Images
          type: file
          multiple: true
          destination: 'user/data/tmp/'
          #classes: "sub"

        - name: sample_instructions
          label: ' '
          type: display
          content: '*Upload as many images as you like'

        - name: spacer_2
          type: spacer
          title: ' '

        - name: priority
          label: Priority
          type: radio
          options:
            option1: High Priority
            option2: Medium Priority
            option3: Low Priority

        - name: spacer_3
          type: spacer
          title: ' '

        - name: due_date
          label: Target Date
          type: date

    buttons:
        - type: submit
          value: Submit

        - type: reset
          value: Reset

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
                mail: "{{ form.value.email }}"
            subject: "{{ form.value.title|e }}"
            body: "{% include 'forms/data.html.twig' %}"

        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"

        - message: Thank you for your feedback!
        - display: thankyou
---

# Graphic Design Request Form

---