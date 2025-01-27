import React from 'react';

function Header() {
  return (
    <header>
      <div className="profile">
        <img src="/images/profile.jpg" alt="プロフィール画像" className="profile-img" />
        <h1>名前</h1>
      </div>
      <nav>
        <ul>
          <li><a href="#about">自己紹介</a></li>
          <li><a href="#portfolio">ポートフォリオ</a></li>
          <li><a href="#contact">連絡先</a></li>
        </ul>
      </nav>
    </header>
  );
}

export default Header;
