import os
import re

migrations_dir = r'e:\cv\portfolio\laravel-app\database\migrations'

schemas = {
    'create_settings_table': """
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
    """,
    'create_projects_table': """
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('technology')->nullable();
            $table->string('purpose')->nullable();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
    """,
    'create_experiences_table': """
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->string('duration');
            $table->text('description');
            $table->timestamps();
    """,
    'create_posts_table': """
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('image')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamps();
    """,
    'create_comments_table': """
            $table->id();
            $table->foreignId('post_id')->constrained()->cascadeOnDelete();
            $table->string('guest_name');
            $table->string('guest_email')->nullable();
            $table->text('content');
            $table->boolean('is_approved')->default(true);
            $table->timestamps();
    """,
    'create_subscribers_table': """
            $table->id();
            $table->string('email')->unique();
            $table->timestamps();
    """,
    'create_cvs_table': """
            $table->id();
            $table->string('file_path');
            $table->string('version')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
    """
}

for filename in os.listdir(migrations_dir):
    for table, schema in schemas.items():
        if table in filename:
            filepath = os.path.join(migrations_dir, filename)
            with open(filepath, 'r') as f:
                content = f.read()
            
            # Find the Schema::create block and replace it
            pattern = re.compile(r"Schema::create\('([^']+)', function \(Blueprint \$table\) \{(.*?)\}\);", re.DOTALL)
            
            def repl(match):
                table_name = match.group(1)
                return f"Schema::create('{table_name}', function (Blueprint $table) {{\n{schema}        }});"
            
            new_content = pattern.sub(repl, content)
            
            with open(filepath, 'w') as f:
                f.write(new_content)
            print(f"Updated {filename}")
