// Define our custom masking objects
var maskList = {
    'us': '(@00) !00-0000',
    'gb': { 0: '!00 000000Z', 6: '!000 000000' },
    'in': { 0: '!0 00 000Z', 7: '!0 000 000Z', 8: '!0 000 0000Z', 9: '!0 0000 0000' },
    'nl': '!0 000 0000',
    'de': { 0: '!00 0000Z', 7: '!00 00000Z', 8: '!0 0000000Z', 9: '!0 00000000Z', 10: '!00 00000000Z', 11: '!000 00000000Z' },
    'at': { 0: '!00 0000Z', 7: '!00 00000Z', 8: '!0 00000ZZZ', 9: '!0 00000000Z', 10: '!00 0000ZZZZZ', 11: '!000 00000000Z' },
    'ru': '!00 000 0000',
    'jp': { 0: '!0000Z', 5: '!00000Z', 6: '!0 00000ZZZZ', 10: '!00 0000000ZZZ' },
    'cn': { 0: '!0000Z', 5: '!00000Z', 6: '!0 00000ZZZ', 9: '!00 000000ZZZ' },
    'kr': '!0 000 000ZZZ',
    'be': { 0: '!0 00 000Z', 7: '!0 000 000Z' },
    'sg': '!0000000ZZZZ'
};

// Adjust mask defaults to suit our current need
delete $.jMaskGlobals['translation']['9'];

// Define our custom masking function
function setMasks(obj,cc) {

    var rules = maskList[cc];

    // Modify the input field to show the new country's dial code if field is populated
    if ((obj.val().length) && (obj.val().charAt(0) == '+')) {
        
        obj.val(obj.val().substring(obj.val().indexOf(" ")));
    }

    if (typeof rules === 'object') {
        var lims = Object.keys(rules);
        lims.sort(function(a,b) {
            return a-b;
        });
        rule = rules[0];
    } else {
        rule = rules;
    }

    var options =  {
        translation:  {
            'Z': {pattern: /[0-9]/, optional: true},
            '!': {pattern: /[1-9]/},
            '@': {pattern: /[2-9]/},
            '#': {pattern: /[3-9]/},
            '$': {pattern: /[4-9]/},
            '%': {pattern: /[5-9]/},
            '^': {pattern: /[6-9]/},
            '&': {pattern: /[7-9]/},
            '*': {pattern: /[8-9]/}
        },
        onKeyPress: function (cep, e, field, options) {
            
            var mask;
            chars = obj.cleanVal();

            if (typeof(lims) != "undefined") {

                var i = lims.length;
                
                while(i--) {

                    lim = lims[i];
                    
                    if (chars.length > lim) {
                        
                        mask = rules[lim];
                        break;
                    } else {
                        
                        mask = rules[0];
                    }
                }
            } else {
                
                mask = rules;
            }

            mask = '+'+obj.attr('data-dial-code')+' '+mask;

            obj.mask(mask, options);
        }
    };

    // Set field mask after country is changed
    rule = '+'+obj.attr('data-dial-code')+' '+rule;
    obj.mask(rule, options);
}

function setFlags(obj) {
    
    // obj expects jQuery Object
    flagClass = obj.attr('data-country-code');
    dialCode = obj.attr('data-dial-code');
    phoneField = $('#'+obj.parent().attr('data-phone-field'));
    flagField = $('.phone-input[data-phone-field="'+phoneField.attr('id')+'"] #activeFlag');
    
    // Set the flag for the current phone flag field
    $(flagField).attr('class', 'flag-icon '+flagClass);

    // Set the dial code (ie: +1 or +44 etc.)
    $(phoneField).attr('data-dial-code', dialCode);

    // Set the mask options on the 'phoneField'
    setMasks(phoneField, flagClass);
}

$(document).ready(function() {
    
    var phone = $('input[type="tel"]');
    var thisList = '';

    phone.each(function() {
        obj = $('ul[data-phone-field="'+$(this).attr('id')+'"] li.default-flag');
        setFlags(obj);
    });

    // $('input[data-grav-field="phone"]').mask('000.000.0000');
    $('.pure-form input').focusout(function() {
        // console.log('we changed fields');

    });

    $('.phone-flag-container').click(function(event) {
        event.stopPropagation();
        thisList = $(this).next('ul.country-list');
        thisList.toggle();

        $(document).click(function(event) {
            thisList.hide();
        });
    });

    $('.country').click(function(event) {
        setFlags($(this));
    });
});