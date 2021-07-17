#include <iostream>
#include <SFML/Graphics.hpp>
#include <SFML/Audio.hpp> 


using namespace std;
using namespace sf;

const int WIDTH  = 800;
const int HEIGHT = 600;
int main() {

    // RenderWindow window;
    // window.create(VideoMode(WIDTH, HEIGHT), "Window Simple");

    VideoMode currentMode = VideoMode::getDesktopMode();
    cout << currentMode.width << "-" << currentMode.height << endl; // current desktop width, height

    RenderWindow window(VideoMode(WIDTH, HEIGHT), "Window Simple", Style::Resize);
    window.setFramerateLimit(60);
    
    RectangleShape rect1;
    rect1.setSize(Vector2f(50.f, 50.f));
    rect1.setPosition(Vector2f(200, 200));    
    rect1.setFillColor(Color::Red);

    CircleShape circ1(30.f);
    circ1.setFillColor(Color::Blue);

    CircleShape trang1;
    trang1.setRadius(40.f);
    trang1.setPointCount(3);
    trang1.setFillColor(Color::Magenta);
    trang1.setOutlineColor(Color::Green);
    trang1.setOutlineThickness(4.f);
    trang1.setPosition(window.getSize().x / 2, window.getSize().y / 2);

    Vertex line[] = { Vertex(Vector2f(20.f, 20.f)), Vertex(Vector2f(500.f, 600.f))};
    line->color = Color::Blue;

    Music oggMusic;
    oggMusic.openFromFile("sample_audio.ogg");
    
    // oggMusic.setVolume(50.f);
    while(window.isOpen()) {
        Event event;
        while(window.pollEvent(event)) {
            if(event.type == Event::Closed) {
                window.close();
            } else if( event.type == Event::KeyPressed) {
                if(event.key.code == Keyboard::Q || event.key.code == Keyboard::Escape){ 
                    window.close();
                }
            } else if(Keyboard::isKeyPressed(Keyboard::F) || Mouse::isButtonPressed(Mouse::Left)){ 
                cout<<"F";
            } else if(Keyboard::isKeyPressed(Keyboard::Down)) {
                oggMusic.setVolume(oggMusic.getVolume() + 10);
            } else if(Keyboard::isKeyPressed(Keyboard::Up)) {
                oggMusic.setVolume(oggMusic.getVolume() - 10);
            }
        }


        circ1.move(10.f, 1.5f);
        rect1.move(3.f, 1.f);
        rect1.rotate(3.f);
        trang1.rotate(2.f);

        window.clear(Color::White);
        window.draw(rect1);
        window.draw(circ1);
        window.draw(trang1);
        window.draw(line, 2 ,Lines);
        window.display();
    }

    return 0;
}