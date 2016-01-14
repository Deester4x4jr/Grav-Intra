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
          style: one

        - name: desc_instr
          label: ' '
          type: display
          content: '*Please add links to sample images that you would like referenced or used for inspiration'

        # - name: samples
        #   label: Sample Images
        #   type: file
        #   multiple: true
        #   destination: 'user/data/tmp/'
        #   classes: "sub"

        # - name: sample_instructions
        #   label: ' '
        #   type: display
        #   content: '*Upload as many images as you like'

        - name: spacer_2
          type: spacer
          underline: true

        - name: priority
          label: Priority
          type: radio
          options:
            priority_high: High Priority
            priority_medium: Medium Priority
            priority_low: Low Priority

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
            #from: "{{ config.plugins.email.from }}"
            from:
              mail: "{{ form.value.email }}"
              name: "{{ form.value.name }}"
            to:
                mail: "36930.EETUG9zvuf3JYy8rCBux@inbox.breeze.pm"
            subject: "{{ form.value.title|e }}"
            body: "{% include 'forms/breeze.email.twig' %}"
            # attachment:

        - save:
            fileprefix: graphic-design-request-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"

        - display: thankyou
---

# Graphic Design Request Form

---