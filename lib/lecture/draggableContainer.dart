import 'package:flutter/material.dart';

class DraggableContainer extends StatefulWidget {
  @override
  _DraggableContainerState createState() => _DraggableContainerState();
}

class _DraggableContainerState extends State<DraggableContainer> {
  @override
  double width = 100.0, height = 100.0;
  Offset position;
  @override
  void initState() {
    super.initState();
    position = Offset(0.0, height - 20);
  }

  Widget build(BuildContext context) {
    return Stack(
      children: <Widget>[
        Positioned(
          left: position.dx,
          top: position.dy - height + 20,
          child: Draggable(
            child: Container(
              width: 100,
              height: 100,
              color: Colors.orangeAccent,
              child: Center(
                child: Text(
                  "Drag Me",
                  style: Theme.of(context).textTheme.caption.copyWith(
                        fontSize: 18,
                        color: Colors.white,
                        fontWeight: FontWeight.w600,
                      ),
                ),
              ),
            ),
            feedback: Container(
              child: Center(
                child: Text(
                  "Drag To",
                  style: Theme.of(context).textTheme.caption.copyWith(
                        fontSize: 18,
                        color: Colors.white,
                        fontWeight: FontWeight.w600,
                      ),
                ),
              ),
              color: Colors.green,
              width: width,
              height: height,
            ),
            onDragStarted: () {
              print("onDragStarted");
            },
            onDragCompleted: () {
              print("onDragCompleted");
            },
            onDraggableCanceled: (Velocity velocity, Offset offset) {
              setState(() => position = offset);
            },
          ),
        ),
      ],
    );
  }
}
