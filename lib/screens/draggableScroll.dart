import 'package:flutter/material.dart';

class DragApp extends StatefulWidget {
  @override
  _DragAppState createState() => _DragAppState();
}

class _DragAppState extends State<DragApp> {
  @override


  
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Draggable Scroll',
      theme: ThemeData(primarySwatch: Colors.red),
      home: DragScreen(),
    );
  }
}

class DragScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Drag your Receipe'),
      ),
      body: Stack(
        children: <Widget>[
          Image.asset(
            'images/food.jpg',
            fit: BoxFit.cover,
            width: double.infinity,
          ),
          DraggableScrollableSheet(
              initialChildSize: 0.5,
              minChildSize: 0.13,
              maxChildSize: 1,
              builder:
                  (BuildContext context, ScrollController scrollController) {
                return Padding(
                  padding: EdgeInsets.all(10),
                  child: Container(
                    child: ListView.builder(
                        itemCount: 20,
                        controller: scrollController,
                        itemBuilder: (BuildContext context, int index) {
                          return ListTile(
                              leading: CircleAvatar(
                                backgroundImage: AssetImage(
                                    'images/food/food${index + 1}.jpg'),
                              ),
                              title: Text('Receipe${index + 1}'),
                              trailing: Icon(Icons.add),
                              onTap: () {
                                Navigator.push(context,
                                    MaterialPageRoute(builder: (_) {
                                  return FoodScreenApp();
                                }));
                              });
                        }),
                    decoration: BoxDecoration(
                      color: Colors.white,
                      borderRadius: BorderRadius.circular(15),
                    ),
                  ),
                );
              }),
        ],
      ),
    );
  }
}

class FoodScreenApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Food Receipe'),
      ),
      body: SafeArea(
          child: Column(
        children: <Widget>[
          Container(
            width: double.infinity,
            child: Image.asset('images/food/food1.jpg'),
          ),
          SizedBox(
            height: 10.0,
            width: double.infinity,
            child: Divider(
              color: Colors.red,
            ),
          ),
          Container(child: Text('data'),),
        ],
      )),
    );
  }
}
