import re

filepath = r'e:\cv\portfolio\laravel-app\resources\views\frontend\contact.blade.php'
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# Update the form action and add CSRF and success message display
old_form = r'<form class="contact-form reveal" id="contact-form" action="https://formsubmit.co/mdrabbihasan610@gmail.com" method="POST">'
new_form = r"""<form class="contact-form reveal" id="contact-form" action="{{ route('contact.submit') }}" method="POST">
          @csrf
          @if(session('success'))
            <div style="margin-bottom: 1rem; padding: 1rem; background-color: rgba(16, 185, 129, 0.1); border: 1px solid #10b981; border-radius: 4px; color: #10b981;">
              <strong>Success!</strong> {{ session('success') }}
            </div>
          @endif"""

if old_form in content:
    content = content.replace(old_form, new_form)
else:
    # Just in case the formatting is slightly different
    content = re.sub(
        r'<form class="contact-form reveal" id="contact-form" action=".*?" method="POST">',
        new_form,
        content
    )

# Remove the formsubmit hidden inputs if they exist
content = re.sub(r'<input type="hidden" name="_subject" value="New portfolio project inquiry">\s*', '', content)
content = re.sub(r'<input type="hidden" name="_template" value="table">\s*', '', content)
content = re.sub(r'<input type="hidden" name="_captcha" value="false">\s*', '', content)
content = re.sub(r'<input class="honey-field" type="text" name="_honey" tabindex="-1" autocomplete="off">\s*', '', content)

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated contact blade form to point to local Laravel route and handle Gemini auto-reply.")
