<div class="codeofconduct">
    <h1>PHP Australia</h1>
    <p>Welcome to the public landing page for the PHP Australia Slack team. Our group is a safe, confidential space for PHP developers to chat and support each other. Please consider joining us whether you are new to the tech industry or you are a long-time practitioner.</p>
    <p>Not a programmer? That's fine! Our group does not exclude people who work in technical writing, software testing and QA, graphic design, user experience, project management, customer support, or other areas.</p>
 
    <h2>Who's invited?</h2>
    <p>Anyone is welcome to join PHP Australia Slack team.</p>

    <h2>Code of Conduct</h2>
    <p>"PHP Australia" in this document refers to the PHP Australia community group. "The administrators" refers to the administrators on this organization, a list is available at the top of the Team Directory (must be a member of the organization to view).</p>
    <p>PHP Australia is dedicated to providing a harassment-free experience for everyone. We do not tolerate harassment of participants in any form.</p>
    <p>This code of conduct applies to all PHP Australia spaces, including public channels, private channels and direct messages, both online and off. Anyone who violates this code of conduct may be sanctioned or expelled from these spaces at the discretion of the administrators.</p>
    <p>Some PHP Australia spaces may have additional rules in place, which will be made clearly available to participants. Participants are responsible for knowing and abiding by these rules.</p>
    <p>Harassment includes:</p>
    <ul>
      <li>Offensive comments related to gender, gender identity and expression, sexual orientation, disability, mental illness, neuro(a)typicality, physical appearance, body size, race, religion, preferred operating system, programming language, or text editor.</li>
      <li>Unwelcome comments regarding a person's lifestyle choices and practices, including those related to food, health, parenting, drugs, and employment.</li>
      <li>Deliberate misgendering or use of "dead" or rejected names</li>
      <li>Gratuitous or off-topic sexual images or behaviour in spaces where they're not appropriate</li>
      <li>Physical contact and simulated physical contact (eg, textual descriptions like "hug" or "backrub") without consent or after a request to stop.</li>
      <li>Threats of violence</li>
      <li>Incitement of violence towards any individual, including encouraging a person to commit suicide or to engage in self-harm</li>
      <li>Deliberate intimidation</li>
      <li>Stalking or following</li>
      <li>Harassing photography or recording, including logging online activity for harassment purposes</li>
      <li>Sustained disruption of discussion</li>
      <li>Unwelcome sexual attention</li>
      <li>Pattern of inappropriate social contact, such as requesting/assuming inappropriate levels of intimacy with others</li>
      <li>Continued one-on-one communication after requests to cease</li>
      <li>Deliberate "outing" of any aspect of a person's identity without their consent except as necessary to protect vulnerable people from intentional abuse</li>
      <li>Publication of non-harassing private communication</li>
    </ul>
    <p>PHP Australia prioritizes marginalized people's safety over privileged people's comfort. The administrators will not act on complaints regarding:</p>
    <ul>
      <li>"Reverse"-isms, including "reverse racism," "reverse sexism," and "cisphobia"</li>
      <li>Reasonable communication of boundaries, such as "leave me alone," "go away," or "I'm not discussing this with you."</li>
      <li>Communicating in a "tone" you don't find congenial</li>
      <li>Criticizing racist, sexist, cissexist, or otherwise oppressive behavior or assumptions</li>
    </ul>

    <h2>Reporting</h2>
    <p>If you are being harassed by a member of PHP Australia, notice that someone else is being harassed, or have any other concerns, please contact any of the administrators directly via DM.</p>
    <p>This code of conduct applies to PHP Australia spaces, but if you are being harassed by a member of PHP Australia outside our spaces, we still want to know about it. We will take all good-faith reports of harassment by PHP Australia members, especially the administrators, seriously. This includes harassment outside our spaces and harassment that took place at any point in time. The abuse team reserves the right to exclude people from PHP Australia based on their past behavior, including behavior outside PHP Australia spaces and behavior towards people who are not in PHP Australia.</p>
    <p>In order to protect volunteer admins from abuse and burnout, we reserve the right to reject any report we believe to have been made in bad faith. Reports intended to silence legitimate criticism may be deleted without response.</p>
    <p>We will respect confidentiality requests for the purpose of protecting victims of abuse. At our discretion, we may publicly name a person about whom we've received harassment complaints, or privately warn third parties about them, if we believe that doing so will increase the safety of PHP Australia members or the general public. We will not name harassment victims without their affirmative consent.</p>
    
    <h2>Consequences</h2>
    <p>Participants asked to stop any harassing behavior are expected to comply immediately.</p>
    <p>If a participant engages in harassing behavior, the administrators may take any action they deem appropriate, up to and including expulsion from all PHP Australia spaces and identification of the participant as a harasser to other PHP Australia members or the general public.</p>
    
    <h2>Slack</h2>
    
    <p>Slack chat spaces are divided into rooms called "channels", and we have several set up. There is one that you'll be in by default, called #elephpant, which is where you can meet and greet. All other rooms are opt-in.</p>
    
    <h2>Acknowledgement</h2>
    
    <p>This Code of Conduct is a rework of the Code of Conduct from <a href="http://witchat.github.io/">http://witchat.github.io/</a>.</p>
    
    <h2>Changes to the Code of Conduct</h2>
    
    <p>The Code of Conduct may change from time to time, and the most recent version will be available on this page. We will endeavour to notify all members upon any changes by slack message.</p>
</div>

<form method="post" action="index.php?route=<?php echo $data['postTo'];?>">
    <div class="joinus">
        <h1 class="title"><?php echo $data['header'];?></h1>
        <h4 class="sub-title"><?php echo $data['subheader'];?></h4>
        <div class="form-content">
            <div class="form-col">
                <input type="text" name="email" class="form-input" placeholder="E-Mail" required>
            </div>
            <div class="form-col">
                <input type="text" name="firstname" class="form-input" placeholder="Firstname (Optional)">
            </div>
            <div class="form-col">
                <input type="text" name="lastname" class="form-input" placeholder="Lastname (Optional)">
            </div>
            <div class="form-col">
                <div class="g-recaptcha" data-sitekey="<?php echo $data['captcha']; ?>"></div>
                <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
            </div>
            <div class="form-col">
                <button type="submit" class="form-btn">Submit</button>
            </div>
        </div>
    </div>
</form>

