---
title: 'Form Test'
form:
    name: my-nice-form
    fields:
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
        
        - name: feedback
          label: Feedback
          size: large
          placeholder: 'Any feedback?'
          type: text
    
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
                name: "{{ form.value.name|e }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
            # - message: Thank you for your feedback!
            # - display: thankyou
---